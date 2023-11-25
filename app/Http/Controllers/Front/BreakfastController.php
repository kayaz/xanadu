<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class BreakfastController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        return view('front.breakfast.index')->with(['page' => $page]);
    }
}
