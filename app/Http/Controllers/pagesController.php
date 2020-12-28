<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function prediction(){
        return view('pages.prediction');
    }
    public function bet(){
        return view('pages.bet');
    }
    public function stream(){
        return view('pages.stream');
    }
    public function odd(){
        return view('pages.odd');
    }
}
