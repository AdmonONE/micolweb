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
                        <div class="pull-left"><h3>Sistemas</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('sistema.create') }}" class="btn btn-info">Registrar Actividad</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="entidad_sistemas" class="table table-bordred table-striped">
                                <thead>
                                    <th>Colabador</th>
                                    <th>Proceso</th>
                                    <th>O.S.</th>
                                    <th>Fecha</th>
                                    <th>Cuadrilla</th>
                                    <th>Actividad</th>
                                    <th>Estado</th>
                                    <th>Materiales</th>
                                    <th>Costo</th>                                    
                                </thead>
                                <tbody>
                                    @if($sistemas->count())
                                    @foreach($sistemas as $sistema)
                                    <tr>
                                        <td>{{$sistema->email}}</td>
                                        <td>{{$sistema->proceso}}</td>
                                        <td>{{$sistema->OS}}</td>
                                        <td>{{$sistema->fecha}}</td>
                                        <td>{{$sistema->cuadrilla}}</td>
                                        <td>{{$sistema->actividad}}</td>
                                        <td>{{$sistema->estado}}</td>
                                        <td>{{$sistema->materiales}}</td>
                                        <td>{{$sistema->costo}}</td>
                                        <td><a class="btn btn-primary btn-xs" href="{{action('SistemaController@edit', $sistema->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>
                                            <form action="{{action('SistemaController@destroy', $sistema->id)}}" method="POST">
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
                        {{$sistemas->links()}}
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="row" style="border-style: none; border-color: blue;">

        <div>
          <a class="buy-with-crypto"
             href="https://commerce.coinbase.com/checkout/5ce185e5-4dff-4886-9384-ed3a079e00d7">
            <span>Buy with Crypto</span>
          </a>
          <script src="https://commerce.coinbase.com/v1/checkout.js">
          </script>
        </div>

    </div>


</div>
@endsection