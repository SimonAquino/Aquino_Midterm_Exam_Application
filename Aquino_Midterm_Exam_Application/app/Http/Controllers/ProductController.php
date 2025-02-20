<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Spirited Away', 'genre' => 'Fantasy', 'price' => 10.99],
            ['title' => 'Your Name', 'genre' => 'Romance/Fantasy', 'price' => 12.99],
            ['title' => 'A Silent Voice', 'genre' => 'Drama/Romance', 'price' => 11.49],
            ['title' => 'My Neighbor Totoro', 'genre' => 'Fantasy', 'price' => 9.99],
            ['title' => 'Howls Moving Castle', 'genre' => 'Fantasy/Adventure', 'price' => 13.99],
            ['title' => 'Princess Mononoke', 'genre' => 'Fantasy/Adventure', 'price' => 14.49],
            ['title' => 'Weathering with You', 'genre' => 'Romance/Fantasy', 'price' => 12.49],
            ['title' => 'Demon Slayer: Mugen Train', 'genre' => 'Action/Adventure', 'price' => 15.99],
            ['title' => 'Ghost in the Shell', 'genre' => 'Sci-Fi', 'price' => 10.49],
            ['title' => 'Akira', 'genre' => 'Sci-Fi/Action', 'price' => 11.99],
        ];

        return view('blade', compact('products'));
    }
}
