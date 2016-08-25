@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modulo de cadastro de conteudo</div>

                <div class="panel-body">
                    <form action="/admin/conteudo/inserir-conteudo" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" name='titulo' id="titulo" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <label for="conteudo">Conteudo</label>
                            <input type="text" class="form-control" name="conteudo" id="conteudo" placeholder="Conteudo">
                        </div>
                        <button type="submit" class="btn btn-default">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection