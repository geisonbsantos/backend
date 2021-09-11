<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IniController extends Controller
{
    public function index()
    {
        return response()->json(['status' => true]);
    }
}
