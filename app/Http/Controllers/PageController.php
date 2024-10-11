<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

public function index()
{
    $services = Service::all(); // Fetch all services
    $products = Product::all(); // Fetch all products (make sure you have a Product model)

    return view('home', compact('services', 'products')); // Pass both services and products
}
}