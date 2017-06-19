@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">¡Acceso permitido!</div>

                <div class="panel-body">
                    Tus datos de conexión son:
                </div>
                <div class="panel panel-body">
                    @foreach ($datos as $dato)
                        <strong>
                            <div class="panel-body">
                                {{ $dato->name }}
                            </div>
                            <div class="panel-body">
                                {{ $dato->email }}
                            </div>
                            <div class="panel-body">
                                {{ $dato->telephone }}
                            </div>
                        </strong> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
