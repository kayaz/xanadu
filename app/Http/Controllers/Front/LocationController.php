<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class LocationController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        return view('front.location.index')->with(['page' => $page]);
    }
}
