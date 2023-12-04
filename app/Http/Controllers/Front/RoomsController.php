<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Page;

class RoomsController extends Controller
{
    public function index()
    {
        $page = Page::find(7);
        $list = Image::where('gallery_id', 1)->get();
        return view('front.rooms.index')->with(['page' => $page, 'list' => $list]);
    }
}