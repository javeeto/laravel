<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests\GenreRequest;
use Cinema\Genre;

class GeneroController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('genero.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing() {
        $generos = Genre::all();
        return response()->json(
                        $generos->toArray()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreRequest $request) {
        if ($request->ajax()) {
            Genre::create($request->all());
            return response()->json([
                        "mensaje" => "Registro creado",
                        "exito" => "ok"
            ]);
        }
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
        $genero = Genre::find($id);
        return response()->json(
                        $genero->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        if ($request->ajax()) {
            $genero = Genre::find($id);
            $genero->fill($request->all());
            $genero->save();
            return response()->json([
                        "mensaje" => "Registro actualizado",
                        "exito" => "ok"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id) {
        if ($request->ajax()) {
            $genero = Genre::find($id);
            $genero->delete();
            return response()->json([
                        "mensaje" => "Registro eliminado exitosamente",
                        "exito" => "ok"
            ]);
        }
    }

}
