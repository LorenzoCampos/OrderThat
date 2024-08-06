<?php

namespace App\Controllers;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('home');
    }

    public function indexTest()
    {
        $products = new Product();

        $request = $products->find(1);

        return $this->view('indexTest', compact('request'));
    }

    public function createProduct()
    {
        return $this->view('createProduct');
    }

    public function createProductRequest()
    {
        $createProduct = new Product();

        $request = $_POST;

        $p_archive_name = $_FILES['image']['name'];
        $p_archive = $_FILES['image']['tmp_name'];

		// este es el path donde guarda la imagen
		$image_path = "../resources/static/img/$p_archive_name";
        
		// este es el path donde la base de datos va a buscar la imagen
		$image_path_db = "../resources/static/img/$p_archive_name";

        move_uploaded_file($p_archive, $image_path);

        $description = $request['description'];

        $price = $request['price'];

        $stock = $request['stock'];

        $createProduct->create([
            'image_path' => "$image_path_db",
            'description' => "$description",
            'price' => "$price",
            'stock' => "$stock",
        ]);

        return header("Location: ../public/");
    }

    public function test()
    {
        $products = new Product();

        $request = $products->find(1);

        return $this->view('test', compact('request'));
    }

}