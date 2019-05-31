<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){                                //lsapp.test //Home Page
        $title = 'Welcome To Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){                                //lsapp.test/about //About Page
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }



    public function services(){                             //lsapp.test/services //Services Page
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
