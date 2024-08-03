<?php

namespace App\Controllers;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = new Product();

        $request = $products->find(1);

        return $this->view('home', compact('request'));
    }

    public function create()
    {
        $createProduct = new Product();

        return $createProduct->create([
            'image_path' => '..\resources\static\img\image1.png',
            'description' => 'Big Mac',
            'price' => '6500',
            'stock' => '158'
        ]);
    }

    public function test()
    {
        $products = new Product();

        $request = $products->find(2);

        return $this->view('test', compact('request'));
    }

}