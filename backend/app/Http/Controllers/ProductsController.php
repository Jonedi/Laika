<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Products;

class Motorcycle
{
    public $name;
    public $type;
}


class ProductsController extends Controller
{

    public function index()
    {
        $getProducts = file_get_contents("http://".$_SERVER['SERVER_NAME']."/products.json");

        /* var_dump($getProducts); */

        $products = json_decode($getProducts, true);

        $data = [
            'status'    => 'success',
            'code'      => 200,
            'products'=> $products
        ];

        return response()-> json($data);
    }
}
