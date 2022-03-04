<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('prak2.home');
    }
    public function produk(){
        return view('prak2.produk');
    }
    public function produk1(){
        return view('prak2.produk1');
    }
    public function program(){
        return view('prak2.program');
    }
    public function program1(){
        return view('prak2.program1');
    }
    public function news($id){
        return view('prak2.news',['id' => $id]);
    }
    // public function about(){
    //     return view('prak2.about');
    // }
    public function index(){
        return view('prak2.contact');
    }
}
