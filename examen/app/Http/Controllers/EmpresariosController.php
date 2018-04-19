<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmpresariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresarios = DB::table('examen')->get();

        return view('/home', compact(empresarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       DB::table('empresarios')->insert([
         "codigo" => $request->input('codigo'),
         "razon_social" => $request->input('razon_social'),
         "nombre" => $request->input('nombre'),
         "pais" => $request->input('pais'),
         "estado" => $request->input('estado'),
         "ciudad" => $request->input('ciudad'),
         "telefono" => $request->input('telefono'),
         "correo" => $request->input('correo'),
         "created_at" => Carbon::now(),
         "updated_at" => Carbon::now(),
       ]);

       //Realizar consulta
       $empresarios = DB::table('empresarios')->where('activo', '1')->get();
       //ARecargar
       return view('/home', compact('empresarios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresario = DB::table('empresarios')->where('id', $id)->first();
        return view('empresarios.edit', compact('empresario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Actualizar
        DB::table('empresarios')->where('id', $id)->update([
          "codigo" => $request->input('codigo'),
          "razon_social" => $request->input('razon_social'),
          "nombre" => $request->input('nombre'),
          "pais" => $request->input('pais'),
          "estado" => $request->input('estado'),
          "ciudad" => $request->input('ciudad'),
          "telefono" => $request->input('telefono'),
          "correo" => $request->input('correo'),
          "updated_at" => Carbon::now(),
        ]);

        //Realizar consulta
        $empresarios = DB::table('empresarios')->where('activo', '1')->get();
        //ARecargar
        return view('/home', compact('empresarios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('empresarios')->where('id', $id)->delete();

        //Realizar consulta
        $empresarios = DB::table('empresarios')->where('activo', '1')->get();
        //recargar pagina
        return view('/home', compact('empresarios'));
    }
}
