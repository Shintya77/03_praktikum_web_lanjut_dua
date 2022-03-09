<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class PageController extends Controller
{
    public function home(){
        $data = produk::all();
        return view('prak2.home',['title'=> 'Home'], ['isi'=> $data]);
    }
    public function produk(){
        $data = produk::all();
        return view('prak2.produk',['title'=> 'Produk'], ['isi'=> $data]);
    }
    public function produk1(){
        return view('prak2.produk1',['title'=> 'Produk 1']);
    }
    public function program(){
        return view('prak2.program',['title'=> 'Program']);
    }
    public function program1(){
        return view('prak2.program1',['title'=> 'Program 1']);
    }
    public function news($id){
        return view('prak2.news',['id' => $id],['title'=> 'News']);
    }
    public function about(){
        return view('prak2.about', ['title'=> 'About us']);
    }
    public function index(){
        return view('prak2.contact',['title'=> 'Contact']);
    }
}
