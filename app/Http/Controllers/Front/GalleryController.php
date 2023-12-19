<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Page;

class GalleryController extends Controller
{
    public function index()
    {
        $page = Page::find(9);
        $galeries = Gallery::orderBy('sort', 'ASC')->get();

        $houses = Image::where('gallery_id', 1)->get();
        $pok2 = Image::where('gallery_id', 2)->get();
        $pok3 = Image::where('gallery_id', 3)->get();
        $restaurant = Image::where('gallery_id', 4)->get();
        $playground = Image::where('gallery_id', 5)->get();
        $pool = Image::where('gallery_id', 6)->get();

        return view('front.gallery.index', compact('page', 'galeries', 'pool', 'pok2', 'pok3', 'houses', 'restaurant', 'playground'));
    }

    public function show()
    {
        $page = Page::find(9);
        return view('front.gallery.show', compact('page'));
    }
}
