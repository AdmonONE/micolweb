<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sistema;

class SistemaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Cargar actividades
        $sistemas = Sistema::orderBy('id','DESC')->paginate(3);
        return view('Sistema.index',compact('sistemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Sistema.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request,['id'=>'', 'email'=>'required', 'proceso'=>'required', 'OS'=>'required', 'fecha'=>'required', 'cuadrilla'=>'required', 'actividad'=>'required', 'estado'=>'required', 'materiales'=>'required', 'costo'=>'required']);
        Sistema::create($request->all());
        return redirect()->route('sistema.index')->with('success','Ingreso Correcto');

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
        return view('Sistema.show',compact('sistemas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tecnico = Sistema::find($id);
        return view('Sistema.edit',compact('sistemas'));
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
        //
        $this->validate($request,['id'=>'', 'email'=>'required', 'proceso'=>'required', 'OS'=>'required', 'fecha'=>'required', 'cuadrilla'=>'required', 'actividad'=>'required', 'estado'=>'required', 'materiales'=>'required', 'costo'=>'required']);
        Sistema::create($request->all());
        return redirect()->route('sistema.index')->whit('success','Ingreso Correcto');

        Sistema::find($id)->update($request->all());
        return redirect()->route('sistema.index')->with('success', 'Actualización Correcta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Sistema::find($id)->delete();
        return redirect()->route('sistema.index')->with('success','Registro Eliminado Correctamente');
    }


    /**
    * Método REST
    * @return \Illuminate\Http\Response
    */

    public function getSistemas()
    {
        $sistemas = Sistema::all();
        return response()->json($sistemas);
    }
}
