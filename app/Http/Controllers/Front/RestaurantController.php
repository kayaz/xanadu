<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class RestaurantController extends Controller
{
    public function index()
    {
        $page = Page::find(12);
        return view('front.restaurnat.index')->with(['page' => $page]);
    }
}
