<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to my Laravel 8 cource";
        $description = "Created by Kapureka6174";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        // Compactメソッド
        // return view('products.index', compact('title', 'description'));

        // Withメソッド
        // return view('products.index')->with('data', $data);

        // Directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about()
    {
        return 'About Us Page';
    }
}
