<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    //
    public function index(){

        print_r(route('producting'));
        // $title = "Welcome to  Laravel 8";
        // $data = [
        //     'product1' => 'Smartphone',
        //     'product2' => 'Bananas'
        // ];

        //Using compact to pass data to View
        // $description = "This is the laravel for beginners";
        // return view('products.products', compact('title', 'description'));
        //Use with to pass data to view
        // return view('products.products')->with('title', $title);

        //Pass array to view
        return view('products.products');

    }
    public function about(){

        return view('products.about');
    }
}
