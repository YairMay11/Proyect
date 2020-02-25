<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administradores;
use App\Blog;
class AdministradoresController extends Controller
{
    public function index(){
        $administradores = administradores::all();
        $blog = Blog::all();
        return view("paginas.administradores", array("administradores"=>$administradores, "blog"=>$blog));
    }
}
 