<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to Vape On';
        return view('pages.index')->with('tit',$title);
    }
    public function about(){
        return view('pages.about');
    }
    public function products(){
        $data = array(
            'title' => 'Products',
            'products' => ['smok','tanks','mods']
        );
        return view('pages.products')->with($data);
    }
}
