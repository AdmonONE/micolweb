@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="" style="text-align: center;">
                    <?php
                        echo "Fecha: " . date("d") . "/" . date("m") . "/" . date("Y") . "<br>" . "Semana " . date("W");

                        echo "<h3>Gestión Diaria </h3>";
                    ?>
                    
                </div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
                
            </div>

        </div>
    </div>

    <div class="row" style="text-align: center; border-style: solid; border-color: black;">

        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Actividades de Técnicos</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('tecnico.create') }}" class="btn btn-info">Registrar Actividad</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="entidad_tecnicos" class="table table-bordred table-striped">
                                <thead>
                                    <th>Cuadrilla</th>
                                    <th>Actividad</th>
                                    <th>NIC</th>
                                </thead>
                                <tbody>
                                    @if($tecnicos->count())
                                    @foreach($tecnicos as $tecnico)
                                    <tr>
                                        <td>{{$tecnico->id_cuadrilla}}</td>
                                        <td>{{$tecnico->id_actividad}}</td>
                                        <td>{{$tecnico->NIC}}</td>
                                        <td><a class="btn btn-primary btn-xs" href="{{action('TecnicoController@edit', $tecnico->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>
                                            <form action="{{action('TecnicoController@destroy', $tecnico->id)}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">

                                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="8">Sin registros</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{$tecnicos->links()}}
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="row" style="border-style: none; border-color: blue;">

    </div>


</div>
@endsection