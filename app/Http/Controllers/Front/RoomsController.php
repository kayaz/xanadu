<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Page;
use App\Models\Pricelist;

class RoomsController extends Controller
{
    public function index()
    {
        $page = Page::find(7);
        $list = Image::where('gallery_id', 1)->get();
        $entry = Pricelist::find(1);
        $pok2 = Image::where('gallery_id', 2)->get();
        $pok3 = Image::where('gallery_id', 3)->get();
        return view('front.rooms.index')->with(['page' => $page, 'list' => $list, 'pricelist' => $entry, 'pok2' => $pok2, 'pok3' => $pok3]);
    }
}