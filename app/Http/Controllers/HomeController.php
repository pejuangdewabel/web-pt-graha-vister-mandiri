<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.tentang');
    }

    public function dijual(){
        return view('pages.dijual');
    }

    public function dijualDetail($id){
        return view('pages.detailDijual');
    }

    public function disewakan(){
        return view('pages.disewakan');
    }

    public function contact(){

    }

}
