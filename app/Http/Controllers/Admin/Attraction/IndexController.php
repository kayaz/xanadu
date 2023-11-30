<?php

namespace App\Http\Controllers\Admin\Attraction;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttractionFormRequest;
use App\Models\Attraction;
use App\Repositories\AttractionRepository;
use App\Services\AttractionService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private AttractionRepository $repository;
    private AttractionService $service;

    public function __construct(AttractionRepository $repository, AttractionService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.attraction.index', ['list' => $this->repository->allSort('ASC')]);
    }

    public function create()
    {
        return view('admin.attraction.form', [
            'cardTitle' => 'Dodaj wpis',
            'backButton' => route('admin.attraction.index')
        ])->with('entry', Attraction::make());
    }

    public function store(AttractionFormRequest $request)
    {
        $entry = $this->repository->create($request->validated());

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $entry);
        }

        return redirect(route('admin.attraction.index'))->with('success', 'Nowy wpis dodany');
    }

    public function edit(int $id)
    {
        return view('admin.attraction.form', [
            'entry' => $this->repository->find($id),
            'cardTitle' => 'Edytuj wpis',
            'backButton' => route('admin.attraction.index')
        ]);
    }

    public function update(AttractionFormRequest $request, int $id)
    {
        $entry = $this->repository->find($id);
        $this->repository->update($request->validated(), $entry);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $entry, 1);
        }

        return redirect(route('admin.attraction.index'))->with('success', 'Wpis zaktualizowany');
    }

    public function destroy(int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }

    public function sort(Request $request)
    {
        $this->repository->updateOrder($request->get('recordsArray'));
    }
}
