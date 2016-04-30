<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\User;
use Cinema\Http\Requests;
use Session;
use Redirect;

class UsuarioController extends Controller
{

     public function index(){
     	$users = User::All();
    	return view('usuario.index',compact('users'));
    }

     public function store(Request $request){
    	User::create([
    		'name' => $request['name'],
    		'email' =>$request['email'],
    		'password' => $request['password'],
    	]);
    	return redirect('/usuario')->with('message','store');
    }
     public function create(){
     	return view('usuario.create');
    }

    public function edit($id){
    	$user = User::find($id);
    	return view('usuario.edit',['user'=>$user]);
    }

    public function update($id, Request $request){
    	$user = User::find($id);
    	$user->fill($request->all());
    	$user->save;
    	Session::flash('message','usuario editado correctamente');
    	return Redirect::to('/usuario');
    }
}
