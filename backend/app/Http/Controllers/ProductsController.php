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
        $getProducts = new Products;

        /* $getProducts = file_get_contents("http://".$_SERVER['SERVER_NAME']."/products.json");

        $products = json_decode($getProducts, true); */

        $data = [
            'status'    => 'success',
            'code'      => 200,
            'products'  => $getProducts
        ];

        return response()-> json($data);
    }
}
