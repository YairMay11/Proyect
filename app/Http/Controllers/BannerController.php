<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Blog;
class BannerController extends Controller
{
    public function index(){
        $banner = banner::all(); 
        $blog = Blog::all();
        return view("paginas.banner", array("banner"=>$banner, "blog"=>$blog));
    } 
}
