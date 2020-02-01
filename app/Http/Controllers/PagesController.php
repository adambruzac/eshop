<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        $title = 'Welcome to the Golf Shop';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'Welcome to the Golf Shop--About page';
        return view('pages.about')->with('titlee', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Custom balls', 'Custom shirts', 'Events']
        );
        return view('pages.services')->with($data);
    }


}
