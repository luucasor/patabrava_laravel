<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

	public function lista(){

		$produtos = DB::select('SELECT * FROM produto');
		return view('produto.listagem')->with('produtos', $produtos);
	}

	public function mostra(){
		$id = Request::route('id');
		$produto = DB::select('SELECT * FROM produto WHERE id = ?', [$id]);
		return view('produto.detalhes')->with('p', $produto[0]);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(){

		$nome 		  = Request::input('nome');
		$descricao    = Request::input('descricao');
		$quantidade   = Request::input('quantidade');
		$preco_compra = Request::input('preco_compra');
		$preco_venda  = Request::input('preco_venda');

		DB::insert('INSERT INTO produto (nome, descricao, quantidade, preco_compra, preco_venda) 
					VALUES (?,?,?,?,?)', array($nome, $descricao, $quantidade, $preco_compra, $preco_venda));

		return redirect('/produtos')->withInput(Request::except("pass"));
	}

	public function exclui(){
		return 'View Exclui';
	}

	public function edita(){
		return 'View Edita';
	}
}