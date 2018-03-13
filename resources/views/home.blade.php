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

        <div class="col-md-9">

         <iframe width="963" height="467" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=45480953&amp;format=interactive"></iframe>
         </div>
         <div class="col-md-3" style="text-align: center;"> Observaciones</div>
    </div>


    <div class="row" style="border-style: none; border-color: blue;">
        <div class="col-md-9" style="border-style: solid; border-color: black;">
            <iframe width="100%" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=1052684101&amp;format=interactive"></iframe>
        </div>
        <div class="col-md-3" style="border-style: solid; border-color: black;"></div>


        <div class="col-md-9" style="border-style: solid; border-color: black;">
            <iframe width="100%" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=1501370045&amp;format=interactive"></iframe>
        </div>
        <div class="col-md-3" style="border-style: solid; border-color: black;"></div>


        <div class="col-md-9" style="border-style: solid; border-color: black;">
            <iframe width="100%" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=1903575771&amp;format=interactive"></iframe>
        </div>
        <div class="col-md-3" style="border-style: solid; border-color: black;"></div>
    </div>


</div>
@endsection
