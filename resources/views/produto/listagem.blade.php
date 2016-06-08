@extends('layout.principal')

@section('conteudo')
<h1>Listagem de Produtos</h1>

<table class="table">
	@foreach($produtos as $p)
	<tr class="{{ $p->quantidade <=1 ? 'danger' : ''}}">
		<td> {{$p->referencia or '...'}} </td>
		<td> {{$p->preco_venda or '0.00'}} </td>
		<td> {{$p->descricao or 'NULL'}} </td>
		<td> {{$p->quantidade or '0'}} </td>
		<td>
			<a href="/produtos/mostra/{{$p->id}}">
				<span class="glyphicon glyphicon-search"></span>
			</a>
		</td>
	</tr>
	@endforeach
</table>
@stop