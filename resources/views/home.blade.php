@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="center">
            <h3><strong>C.I.C.I.S.</strong></h3>
            <h4>Centro de Investigación y Capacitación Informática y Sistemas</h4>
            <h5 style="color: blue">Facultad Integral del Chaco</h5>
            <h5 style="color: red"><strong>U.A.G.R.M.</strong></h5>
        </div>
    </div>
</div>
@endsection
