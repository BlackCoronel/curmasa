<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriasController extends Controller
{
    public function index(){

       $categ = DB::table('categorias')->get();

        return view('layouts.categorias', compact('categ'));

    }

    public function productos($categoria){

    }
}
