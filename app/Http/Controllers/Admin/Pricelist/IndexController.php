<?php

namespace App\Http\Controllers\Admin\Pricelist;

use App\Http\Controllers\Controller;
use App\Http\Requests\PricelistFormRequest;
use App\Models\Pricelist;
use App\Repositories\PricelistRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private PricelistRepository $repository;

    public function __construct(PricelistRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $entry = Pricelist::find(1);
        return view('admin.pricelist.index', compact('entry'));
    }

    public function update(PricelistFormRequest $request)
    {
        $entry = $this->repository->find(1);
        $this->repository->update($request->validated(), $entry);
        return redirect(route('admin.pricelist.index'))->with('success', 'Wpis zaktualizowany');
    }
}
