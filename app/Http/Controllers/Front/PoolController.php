<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PoolController extends Controller
{
    public function index()
    {
        $page = Page::find(2);
        return view('front.pool.index', compact('page'));
    }
}
