<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Blog', 'Post', 'Chat']
        );
        return view('pages.services')->with($data);
    }

    public function profile()
    {
        return view('pages.profile');
    }
}
