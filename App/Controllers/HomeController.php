<?php

namespace App\Controllers;
use App\Models\Product;

class HomeController extends Controller
{
    public function modify($id)
    {

        $contactModel = new Product();
        $product = $contactModel->where('id', "$id")->first();
        // $product = $contactModel->find($id);

        // return $contactModel->where('product_name', 'LIKE', "%coca%")->orderBy('product_price')->get();

        // return $contactModel->update(17, [
        //     'image_path' => 'aaaaa path',
        //     'product_code' => '9999',
        //     'product_name' => 'soy nombre',
        //     'product_desc' => 'hola como estas',
        //     'fk_rubro' => '2',
        //     'fk_category' => '3',
        //     'product_price' => 10001,
        //     'product_stock' => 10001
        // ]);

        // $contactModel->delete(17);
        // return $product;

        return $this->view('home', compact('product'));

    }

}