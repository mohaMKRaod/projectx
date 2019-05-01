<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class pagecontroler extends Controller
{
    public function index( ){
        $product = Products::all();
        return view('pages.index',compact('product'));
    }
    public function about( ){
        return view('pages.about');
    }
    public function profile( ){
        return view('pages.profile');
    }
    public function showcloss( ){
        $product = Products::all();
        return view('pages.showcloss',compact('product'));
    }
    public function contact( ){
        return view('pages.contact');
    }
    public function product_detail( ){
        $product = Products::all();
        return view('pages.product_detail',compact('product'));
    }

    
}
