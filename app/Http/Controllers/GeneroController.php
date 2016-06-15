<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Cinema\Http\Requests;
//incorporando modelo
use Cinema\Genre;

class GeneroController extends Controller
{
    public function create(){
    	return view('genero.create');
    }
    public function store(Request $request)
    {
    	if ($request->ajax()) {
    		Genre::create($request->all());
    		return response()->json([
    				"mensaje"=>"creado"
    			]);
    	}
    	
    }

}
