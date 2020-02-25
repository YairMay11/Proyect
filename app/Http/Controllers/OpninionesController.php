<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opiniones;
use App\Blog;
class OpninionesController extends Controller
{
    public function index(){
        $opiniones = opiniones::all(); 
        $blog = Blog::all();
        return view("paginas.opiniones", array("opiniones"=>$opiniones, "blog"=>$blog)); 
    } 
}
