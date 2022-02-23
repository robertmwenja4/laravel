<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){

        return view('home');
    }
    public function advanced($name, $id){


        $data = [
            'iphone' => 'iPhone',
            'sumsung' => 'Sumsung',
            'neon' => [
                1 => 'neon1',
                12 => 'neon12'
            ]

        ];

        return view('home', [
            'product' => $data[$name][$id] ?? 'This product ' . $name . ' ' . $id . ' does not exist'
        ]);

        

    }
}
