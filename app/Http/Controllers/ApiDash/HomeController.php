<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\client;

class HomeController extends Controller
{
    public function index()
    {
        $clients = client::all();


        $products = [
            [
                'id' => 1,
                'name' => 'Vídeo Game',
                'value' => '100.50'
            ],
            [
                'id' => 2,
                'name' => 'Joystic',
                'value' => '10.50'
            ],
            [
                'id' => 3,
                'name' => 'Jogo Mário',
                'value' => '5.50',
            ]
        ];

        return response()->json([
            'clients' => $clients,
            'products' => $products,
        ]);

        //return response()->json(['status' => true]);
    }
}
