<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        $products = [
            [
                'name' => 'Iphone 16',
                'brand' => 'Apple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 9999,
            ],
            [
                'name' => 'Samsung 16',
                'brand' => 'Samsung',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 9999,
            ],
            [
                'name' => 'Iphone 13',
                'brand' => 'Apple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => 7999,
            ],
        ];
        return view('products', compact('products'));
    }
}