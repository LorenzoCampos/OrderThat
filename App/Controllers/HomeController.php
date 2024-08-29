<?php
namespace App\Controllers;

include "initSession.php";

use App\Models\Product;
use App\Models\Ingredient;
use App\Models\Cart;

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

        $product = new Product();

        $requestProduct = $product->find($id);

        $ingredient = new Ingredient();

        $ingredientForProduct = $ingredient->where("fk_product", "$id")->get();

        $request = compact('requestProduct', 'ingredientForProduct');

        return $this->view('editProduct', compact('request'));
    }

    // Controller para editar un producto
    public function editProductRequest($id){
        
        $products = new Product();

        $request = $_POST;

        // $oldProduct = $products->find($id);

        // // Obtener el nombre de la imagen
        // $p_archive_name = $_FILES['image']['name'];
        // // Obtener el archivo temporal
        // $p_archive = $_FILES['image']['tmp_name'];

		// // este es el path donde guarda la imagen
		// $image_path = "../resources/static/img/$p_archive_name";
        
		// // este es el path donde la base de datos va a buscar la imagen
		// $image_path_db = "../resources/static/img/$p_archive_name";

        // if ($image_path_db != $oldProduct['image_path']) {
        //     // Muevo la imagen recuperada para guardarla en el servidor
        //     $request['image_path'] = $image_path_db;

        //     // Muevo la imagen recuperada para guardarla en el servidor
        //     move_uploaded_file($p_archive, $image_path);
        // } else {
        //     unset($request['image_path']);
        // }
        

        // // Llamar al model para editar registro
        // $products->update("$id", $request);

        // // 
        // header("Location: ../public");

        // exit;
    }

    public function addCart($id)
    {
        $product = new Product();
        
        $cart = new Cart();
        
        $id_user = $_SESSION['id_user'];

        $find_product = $cart->where("fk_product", "$id")->where("fk_user", "$id_user")->get();

        if ($find_product)
        {
            header("Location: ../public/cart");

            exit;
        }
        else
        {
            $add = $cart->create([
                'fk_product' => $id,
                'fk_user' => $id_user,
                'amount' => 1
            ]);

            if ($add)
            {
                $_SESSION['message'] = "Agregado al carrito";
            }
            else
            {
                $_SESSION['message'] = "Error al agregar al carrito";
            }

            header("Location: ../public/cart");

            exit;
        }
    }

    public function cart()
    {   
        $product = new Product();

        $cart = new Cart();

        $id_user = $_SESSION['id_user'];

        $cart_products = $cart->where("fk_user", "$id_user")->get();

        $request = [];

        foreach ($cart_products as $key => $value) {
            $id_product = $value['fk_product'];

            $product_foreach = $product->find($id_product);

            $array_form = [
                'id_product' => $product_foreach['id'],
                'id_cart' => $value['id'],
                'name' => $product_foreach['name'],
                'image_path' => $product_foreach['image_path'],
                'price' => $product_foreach['price'],
                'amount' => $value['amount']
            ];

            array_push($request, $array_form);
        }

        return $this->view('cart', compact('request'));
    }
}