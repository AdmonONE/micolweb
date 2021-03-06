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
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <strong>Error!</strong>Verifique los datos ingresados.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-info">
                    {{Session::get('success')}}
                </div>
                @endif

                <div class="panel panel-heading">
                    <h3 class="panel-title">Nueva Actividad</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('tecnico.store') }} " role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="id_cuadrilla" id="id_cuadrilla" class="form-control input-sm" placeholder="Cuadrilla">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="id_actividad" id="id_actividad" class="form-control input-sm" placeholder="Actividad">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="NIC" id="NIC" class="form-control input-sm" placeholder="Cliente">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Guardar" name="" class="btn btn-success btn-block"><a href="{{route('tecnico.index')}}" class="btn btn-info btn-block">Listar Actividades</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="row" style="border-style: none; border-color: blue;">

    </div>


</div>
@endsection