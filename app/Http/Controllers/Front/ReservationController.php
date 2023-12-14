<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationFormRequest;
use App\Mail\ReservationSend;
use App\Models\Page;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        return view('front.reservation.index', compact('page'));
    }

    public function form(ReservationFormRequest $request)
    {
        Mail::to(settings()->get("page_email"))->send(new ReservationSend($request));
        return redirect()->back()->with(
            'success',
            'Twoja wiadomość została wysłana. W najbliższym czasie skontaktujemy się z Państwem celem omówienia szczegółów!'
        );
    }
}
