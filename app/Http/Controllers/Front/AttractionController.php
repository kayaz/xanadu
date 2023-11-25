<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class AttractionController extends Controller
{
    public function index()
    {
        $page = Page::find(3);
        return view('front.attraction.index')->with(['page' => $page]);
    }
}
