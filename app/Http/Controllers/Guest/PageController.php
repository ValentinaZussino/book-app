<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function getLibri(){
        $libri = ['titolo' => 'titolo 1', 'autore' => 'autore 1'];
        // dd(compact('libri'));
        return view('pages.libri', compact('libri'));
    }
}
