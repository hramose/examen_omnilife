<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function home(){
      $empresarios = DB::table('empresarios')->where('activo', '1')->get();

      return view('/home', compact('empresarios'));
    }
}
