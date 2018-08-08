<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $names = ['adam', 'inderjit', 'sam'];
        return view('pages.index', ['names' => $names]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function master() {
        return view('welcome');
    }
}
