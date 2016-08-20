@extends('layout.master')
	
	@section('menu')
		<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	@foreach($menu as $dadosMenu)
            	<li>
            		<a href="{{ URL::to($dadosMenu['link']) }}">
            			{!! $dadosMenu['texto'] !!}
            		</a>
            	</li>
            @endforeach
          </ul>
        </div>
	@stop

	{{-- TITULO DA PAGINA --}}
	@section('title')
		Home
	@stop

	{{-- CONTEUDO DA PAGINA --}}
	@section('content')
	  Ola mundo
	@stop