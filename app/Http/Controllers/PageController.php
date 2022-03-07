<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('prak2.home',['title'=> 'Home']);
    }
    public function produk(){
        return view('prak2.produk',['title'=> 'Produk']);
    }
    public function produk1(){
        return view('prak2.produk1',['title'=> 'Produk 1']);
    }
    public function program(){
        return view('prak2.program',['title'=> 'Produk 2']);
    }
    public function program1(){
        return view('prak2.program1',['title'=> 'Program 1']);
    }
    public function news($id){
        return view('prak2.news',['id' => $id],['title'=> 'News']);
    }
    // public function about(){
    //     return view('prak2.about');
    // }
    public function index(){
        return view('prak2.contact',['title'=> 'Contact']);
    }
}
