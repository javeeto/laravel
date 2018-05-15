<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\User;
use Cinema\Http\Requests\UserCreateRequest; 
use Cinema\Http\Requests\UserUpdateRequest; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;

class UsuarioController extends Controller {

    
    public function __construct() {
        
        //$this->middleware('user.find',['only'=>['edit','update','destroy']]);
        $this->middleware("auth");
        $this->middleware("admin",['only'=>['create','edit','destroy']]);
        
    }
    
    public function find(Route $route){
        $this->user=User::find($route->getParameter('usuario'));
        return $this->user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::paginate(3);
        return view('usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request) {
        /*User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);*/
        User::create($request->all());
        //return "Usuario registrado";
        Session::flash('message', 'Usuario registrado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user = User::find($id);
        return view('usuario.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id) {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message', 'Usuario editado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user=User::find($id);
        $user->delete();
        Session::flash('message', 'Usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }

}
