@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Veiculos</div>

                <div class="row">
                    <div class="form-group col-4">
                        </br>
                        <a class="dropdown-item" href="{{ url('/veiculo') }}">Veiculo</a>

                        <a class="dropdown-item" href="{{ url('/carro') }}">Carro</a>
                        <a class="dropdown-item" href="{{ url('/caminhao') }}">Caminhão</a>
                        <a class="dropdown-item" href="{{ url('/moto') }}">Moto</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection