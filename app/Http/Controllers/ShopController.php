<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tienda;

class ShopController extends Controller
{
    function create(Validacion $request){

    	return view('tiendas/create');
    }
    function store(Request $request){

    	$nombre= $request->input('nombre');
    	$descripcion= $request->input('description');
    	$email= $request->input('email');
    	$password= $request->input('password');
    	$likes= $request->input('likes');
    	$nuevo = Tienda::create(['name' => $nombre,'description' => $descripcion,'emial' => $email,'password' => $password,'likes' => $likes]);


    }
}
