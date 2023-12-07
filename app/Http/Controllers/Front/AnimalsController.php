<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class AnimalsController extends Controller
{
    public function index()
    {
        $page = Page::find(11);
        return view('front.animals.index')->with(['page' => $page]);
    }
}
