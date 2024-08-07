<?php

namespace App\Controllers;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = new Product();

        $request = $products->all();

        return $this->view('home', compact('request'));
    }

    public function indexTest($id)
    {
        $products = new Product();

        $request = $products->find($id);

        return $this->view('indexTest', compact('request'));
    }

    public function orderTest() //Prueba para test de orden compra
    {
        return $this->view('orderTest');
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

        $request['image_path'] = $image_path_db;

        $createProduct->create($request);

        return header("Location: ../public/");
    }

    public function editProduct($id){

        $products = new Product();

        $request = $products->find($id);

        return $this->view('editProduct', compact('request'));
    }

    public function editProductRequest($id){
        
        $products = new Product();

        $request = $_POST;

        $p_archive_name = $_FILES['image']['name'];
        $p_archive = $_FILES['image']['tmp_name'];

		// este es el path donde guarda la imagen
		$image_path = "../resources/static/img/$p_archive_name";
        
		// este es el path donde la base de datos va a buscar la imagen
		$image_path_db = "../resources/static/img/$p_archive_name";

        $request['image_path'] = $image_path_db;

        move_uploaded_file($p_archive, $image_path);

        $products->update("$id", $request);

        return header("Location: ../");
    }
}