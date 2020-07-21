<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class UsuarioController extends Controller {

	public function novousuario(){

		return view('userform');		
	}

	public function adiciona(){

		$nome = Request::input('nome');
		$sobrenome = Request::input('sobrenome');
		$email = Request::input('email');
		$telefone = Request::input('telefone');
		$senha = Request::input('senha2');

		DB::insert('insert into users (name,sobrenome,email,telefone,password) values (?,?,?,?,?)',	array ($nome,$sobrenome,$email,$telefone,$senha));

		return view('sucesso')->with('nome', $nome);		
	}

} 

