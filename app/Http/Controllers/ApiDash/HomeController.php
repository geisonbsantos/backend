<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\client;
use App\Models\Models\product;

class HomeController extends Controller
{
    public function index()
    {
        $clients = client::all();
        $products = product::all();

        return response()->json([
            'clients' => $clients,
            'products' => $products,
        ]);

        //return response()->json(['status' => true]);
    }
}
