@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modulo de cadastro de conteudo &nbsp; - &nbsp; <a class="btn btn-primary" href="{{ url('/admin/conteudo/cadastrar-conteudo') }}">Inserir novo registro</a></div>
                
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td class="text-center">Titulo</td>
                                <td class="text-center">Texto</td>
                                <td class="text-center">Acoes</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $conteudo)
                                <tr>
                                    <td class="text-center">
                                        {!! $conteudo->titulo !!}
                                    </td>
                                    <td class="text-center">
                                        {!! substr($conteudo->conteudo, 0 , 70) !!}...
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary" href="{{ url("/admin/conteudo/editar-conteudo/id/{$conteudo->id}") }}">Editar</a>&nbsp; | &nbsp;
                                        <a class="btn btn-danger" href="{{ url("/admin/conteudo/excluir/id/{$conteudo->id}") }}">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <center>{{ $dados->links() }}</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection