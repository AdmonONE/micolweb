<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tecnico;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Cargar actividades
        $tecnicos = Tecnico::orderBy('id','DESC')->paginate(3);
        return view('Tecnico.index',compact('tecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Tecnico.create');
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
        $this->validate($request,['id_cuadrilla'=>'required', 'id_actividad'=>'required', 'NIC'=>'required']);
        Tecnico::create($request->all());
        return redirect()->route('tecnico.index')->with('success','Ingreso Correcto');

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
        return view('Tecnico.show',compact('tecnicos'));
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
        $tecnico = tecnico::find($id);
        return view('Tecnico.edit',compact('tecnico'));
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
        $this->validate($request,['id_cuadrilla'=>'required', 'id_actividad'=>'required', 'NIC'=>'required']);
        Tecnico::create($request->all());
        return redirect()->route('tecnico.index')->whit('success','Ingreso Correcto');

        tecnico::find($id)->update($request->all());
        return redirect()->route('tecnico.index')->with('success', 'Actualización Correcta');

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
        Tecnico::find($id)->delete();
        return redirect()->route('tecnico.index')->with('success','Registro Eliminado Correctamente');
    }


    /**
    * Método REST
    * @return \Illuminate\Http\Response
    */

    public function getTecnicos()
    {
        $tecnicos = Tecnico::all();
        return response()->json($tecnicos);
    }
}
