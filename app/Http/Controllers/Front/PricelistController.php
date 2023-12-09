<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Pricelist;

class PricelistController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        $pricelist = Pricelist::find(1);
        return view('front.pricelist.index', compact('page', 'pricelist'));
    }
}
