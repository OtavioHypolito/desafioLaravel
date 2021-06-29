@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Carro</div>

                <form class="" action="/carro" method="POST">
                    <div class="row">
                        <div class="form-group col-8">
                            
                        </div>

                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="marcaCarro">Marca do Carro: </label>
                                <input type="text" id="marcaCarro" name="marcaCarro" class="form-control" value="{{ $carro->marcaCarro }}" />
                            </div>
                        </div>

                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="modeloCarro">Modelo do Carro: </label>
                                <input type="text" id="modeloCarro" name="modeloCarro" class="form-control" value="{{ $carro->modeloCarro }}" />
                            </div>
                        </div>

                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="versaoCarro">Versão do Carro: </label>
                                <input type="text" id="versaoCarro" name="versaoCarro" class="form-control" value="{{ $carro->versaoCarro }}" />
                            </div>
                        </div>

                        <div class="form-group col-8">
                            <div class="form-group col-10">
                                <label for="dicaCarro">Dica do Carro: </label>
                                <textarea class="form-control" id="dicaCarro" name="dicaCarro" rows="3" value="{{ $carro->dicaCarro }}"></textarea>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            @csrf
                            </br> </br> </br>
                            <input type="hidden" id="id" name="id" value="{{ $carro->id }}" />

                            <a href="/home" class="btn btn-warning">Voltar</a>
                            <a href="/carro" class="btn btn-primary">Limpar</a>
                            <button type="submit" class="btn btn-success">Salvar</button>

                        </div>

                </form>

            </div>
        </div>
    </div>


</div>
@endsection