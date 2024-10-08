<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function home() {
        return view('pages.user.home');
    }

    public function aboutUs() {
        return view('pages.user.about-us');
    }

    public function team() {
        return view('pages.user.team');
    }

    public function faq() {
        return view('pages.user.faq');
    }

    public function contactUs() {
        return view('pages.user.contact-us');
    }

    public function blog() {
        return view('pages.user.blog.index');
    }

    public function blogDetail() {
        return view('pages.user.blog.detail');
    }

    public function product() {
        return view('pages.user.product');
    }
}
