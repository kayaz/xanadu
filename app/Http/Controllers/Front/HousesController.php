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
        $entry = Pricelist::find(1);
        $houses = Image::where('gallery_id', 1)->get();
        return view('front.houses.index')->with(['page' => $page, 'pricelist' => $entry, 'houses' => $houses]);
    }
}
