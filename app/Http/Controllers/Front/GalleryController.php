<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        $galeries = Gallery::orderBy('sort', 'ASC')->get();

        return view('front.gallery.index', compact('page', 'galeries'));
    }

    public function show(Gallery $gallery)
    {
        $page = Page::find(1);
        $list = Image::where('gallery_id', $page->id)->get();
        return view('front.gallery.show', compact('page', 'gallery', 'list'));
    }
}
