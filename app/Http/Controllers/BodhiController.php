<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodhiController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function produits(){
        return view('produits');
    }

    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
    public function contactForm(Request $request){
        //print_r($_POST);
        return view('contact',['data' => $request]);
    }
}
