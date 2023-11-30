<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    public function index()
    {
        $page = Page::find(8);
        $list = Image::where('gallery_id', 1)->get();
        return view('front.houses.index')->with(['page' => $page, 'list' => $list]);
    }
}
