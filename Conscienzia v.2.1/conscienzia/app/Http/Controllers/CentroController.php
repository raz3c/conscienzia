<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class CentroController extends Controller {

	public function listaCentros(){

		$centros = DB::select('select * from centros order by co_centro');

		return view('listagemcentros')->with('centros',$centros);
	}
}