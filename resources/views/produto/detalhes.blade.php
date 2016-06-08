@extends('layout.principal')

@section('conteudo')
<h1>Detalhes do produto {{$p->descricao}}</h1>

<ul>
	<li>
		Descrição: {{$p->descricao}}
	</li>
</ul>
@stop