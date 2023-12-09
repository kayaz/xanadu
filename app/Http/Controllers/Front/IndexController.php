<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Attraction;

// CMS

class IndexController extends Controller
{
    public function index()
    {
        $attractions = Attraction::orderBy('sort', 'ASC')->get();
        return view('front.homepage.index', ['attractions' => $attractions]);
    }

}
