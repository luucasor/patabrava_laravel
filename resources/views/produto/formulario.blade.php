@extends('layout.principal')

@section('conteudo')
<h1>Novo Produto</h1>

<form action="/produtos/adiciona" method="post">

	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<div class="form-group">
		<label>Nome</label>
		<input name="nome" class="form-control" />
	</div>

	<div class="form-group">
		<label>Descrição</label>
		<input name="descricao" class="form-control" />
	</div>

	<div class="form-group">
		<label>Quantidade</label>
		<input name="quantidade" class="form-control" />
	</div>

	<div class="form-group">
		<label>Preco Compra</label>
		<input name="preco_compra" class="form-control" />
	</div>

	<div class="form-group">
		<label>Preco Venda</label>
		<input name="preco_venda" class="form-control" />
	</div>

	<button type="submit" class="btn btn-primary">Adicionar</button>
</form>
@if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> 
        O produto {{ old('nome') }} foi adicionado.
  </div>
@endif
@stop