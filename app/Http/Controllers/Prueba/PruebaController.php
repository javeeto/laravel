<?php

namespace Cinema\Http\Controllers\Prueba;

use Cinema\Http\Controllers\Controller;

class PruebaController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return "Controlador prueba vea pues y nombre ";
    }
    
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function nombre($nombre)
    {
        return "Controlador prueba vea pues y nombre ".$nombre;
    }
}
