<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Page;
use App\Models\Pricelist;

class HousesController extends Controller
{
    public function index()
    {
        $page = Page::find(8);
        $list = Image::where('gallery_id', 1)->get();
        $entry = Pricelist::find(1);
        $houses = Image::where('gallery_id', 3)->get();
        return view('front.houses.index')->with(['page' => $page, 'list' => $list, 'pricelist' => $entry, 'houses' => $houses]);
    }
}
