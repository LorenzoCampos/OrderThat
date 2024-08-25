<?php
namespace App\Controllers;

include "initSession.php";

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = new Product();

        // Obtener todos los registros de productos en un array bidimencional
        $request = $products->all();

        // Retornar el View home con los datos
        return $this->view('home', compact('request'));
    }

    public function indexTest()
    {
        return $this->view('indexTest');
    }

    // Traer los detalles del producto
    public function detailProduct($id)
    {
        $products = new Product();

        $request = $products->find($id);

        return $this->view('detailProduct', compact('request'));
    }


    // controller para la vista crear un nuevo proyecto
    public function createProduct()
    {
        // Retornar el View createProduct
        return $this->view('createProduct');
    }


    // Controller para crear un nuevo producto
    public function createProductRequest()
    {
        $createProduct = new Product();

        // Recibir todos los datos del formulario
        $request = $_POST;

        // Obtener el nombre de la imagen
        $p_archive_name = $_FILES['image']['name'];

        // Obtener el archivo temporal
        $p_archive = $_FILES['image']['tmp_name'];

		// este es el path donde guarda la imagen
		$image_path = "../resources/static/img/$p_archive_name";

		// este es el path donde la base de datos va a buscar la imagen
		$image_path_db = "../resources/static/img/$p_archive_name";

        // Muevo la imagen recuperada para guardarla en el servidor
        move_uploaded_file($p_archive, $image_path);

        // Agregar el path de la imagen en el array
        $request['image_path'] = $image_path_db;

        // Llamar al model para crear registro
        $createProduct->create($request);

        // Redireccionar a al View index
        return header("Location: ../public/");
    }

    // Controller para editar un producto
    public function editProduct($id){

        $products = new Product();

        $request = $products->find($id);

        return $this->view('editProduct', compact('request'));
    }

    // Controller para editar un producto
    public function editProductRequest($id){
        
        $products = new Product();

        // Recibir todos los datos del formulario
        $request = $_POST;

        // Obtener el nombre de la imagen
        $p_archive_name = $_FILES['image']['name'];
        // Obtener el archivo temporal
        $p_archive = $_FILES['image']['tmp_name'];

		// este es el path donde guarda la imagen
		$image_path = "../resources/static/img/$p_archive_name";
        
		// este es el path donde la base de datos va a buscar la imagen
		$image_path_db = "../resources/static/img/$p_archive_name";

        // Muevo la imagen recuperada para guardarla en el servidor
        $request['image_path'] = $image_path_db;

        // Muevo la imagen recuperada para guardarla en el servidor
        move_uploaded_file($p_archive, $image_path);

        // Llamar al model para editar registro
        $products->update("$id", $request);

        // 
        header("Location: ../public");

        exit;
    }
}