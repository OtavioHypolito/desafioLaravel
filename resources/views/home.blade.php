@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Veiculos</div>

                <div class="row">
                    <div class="form-group col-12">
                        </br>
                        <a class="btn btn-outline-primary btn-lg btn-block" href="{{ url('/veiculo') }}">Clique aqui para cadastrar</a>
                    </div>
                    
                    
                </div>

                <div class="col-sm col-form-label text-md-center">
                </br> </br>
                    <table class="table table-striped">
                    <thead>
                            <tr>
                                
                                <th>Tipo de Veiculo</th>
                                <th>Marca</th>
                                <th>Dica</th>
                                
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($veiculos as $veiculo) 
                                <tr>  
                                    <td>{{  $veiculo->tipo }}</td>  
                                    <td>{{  $veiculo->marca }}</td>
                                    <td>{{  $veiculo->dica }}</td>
                                </tr>

                        @endforeach

                
                    </tbody>

                </div>

            </div>
        </div>
    </div>


</div>
@endsection