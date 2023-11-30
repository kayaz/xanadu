<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Attraction;
use App\Models\Page;

class AttractionController extends Controller
{
    public function index()
    {
        $page = Page::find(3);
        $attractions = Attraction::orderBy('sort', 'ASC')->get();
        return view('front.attraction.index', compact('attractions', 'page'));
    }

    public function show(int $id){
        $attraction = Attraction::find($id);
        return view('front.attraction.show', compact('attraction'));
    }
}
