<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\User;
use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
{
    /*
    public function __construct(){
        $this->middleware('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuario'));
    }
    */
     public function index(){
     	$users = User::paginate(5);
    	return view('usuario.index',compact('users'));
    }

     public function store(UserCreateRequest $request){
    	User::create($request->all());
    	return redirect('/usuario')->with('message','store');
    }
     public function create(){
     	return view('usuario.create');
    }

    public function edit($id){
    	$user = User::find($id);
    	return view('usuario.edit',['user'=>$user]);
    }

    public function update($id, UserUpdateRequest $request){
    	$user = User::find($id);
    	$user->fill($request->all());
    	$user->save();
    	Session::flash('message','usuario editado correctamente');
    	return Redirect::to('/usuario');
    }

    public function destroy($id){
        User::destroy($id);
        Session::flash('message','usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }
}
