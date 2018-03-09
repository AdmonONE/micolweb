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
                <iframe width="673.5" height="311" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vStM6rCQuKXpOqTeFqo4pLnU_FVAh2LZ0yZ1WrAJuO8ZPMIh_U9fxxZaz2vnFjX7gKMjzadLDfYHa_J/pubchart?oid=555180516&amp;format=interactive"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
