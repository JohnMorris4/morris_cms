<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        $title = 'Home';
        return view('pages.welcome', compact('title'));
    }

    public function getAbout() {
        $title = 'About';
        $first = 'John';
        $last = 'Morris';
        $full = $first.' '.$last;
        return view('pages.about', compact('title', 'full'));
    }

    public function getContact(){
        $title = 'Contact';
        $email = 'johnmorris@morrisje.com';
        return view('pages.contact', compact('email', 'title'));
    }
}
