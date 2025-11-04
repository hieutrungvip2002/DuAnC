<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // top 5 san pham co gia thap nhat
        $featured_products = Product::all()
            ->where("XOA", "=", "0")
            ->sortBy("GIA")
            ->take(5);
        return view("home.index", ["featured_products" => $featured_products]);
    }
}
