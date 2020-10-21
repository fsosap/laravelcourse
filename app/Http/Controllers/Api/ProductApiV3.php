<?php


namespace App\Http\Controllers\Api;

use \App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use App\Product;


class ProductApiV3 extends Controller
{
    public function index()
    {
        return new ProductCollection(ProductResource::collection(Product::all()));
    }

    public function paginate()
    {
        return new ProductCollection(ProductResource::collection(Product::paginate(5)));
    }

}
