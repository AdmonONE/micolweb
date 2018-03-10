@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">Gestión Técnicos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
                
            </div>

            <div class="card-body" style="text-align: center;">

            <iframe width="100%" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=1052684101&amp;format=interactive"></iframe>

<br>




                <br>

            <iframe width="100%" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=1501370045&amp;format=interactive"></iframe>



            <iframe width="100%" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=1903575771&amp;format=interactive"></iframe>
            </div>
        </div>
    </div>

    <iframe width="963" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=45480953&amp;format=interactive"></iframe>
</div>
@endsection
