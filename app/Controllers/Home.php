<?php

namespace App\Controllers;

use App\Models\portadaModel;

class Home extends BaseController
{
	public function index()
	{
		$sql = new portadaModel();

		//titulo
		$resp = "";
		$titulo = $sql->tituloModel();
		foreach ($titulo as $t) {
			$resp = $t['POR_TITULO'];
		}

		//contenido
		$respC = "";
		$contenido = $sql->contenidoModel();
		/* 	foreach($contenido as $c){
			$respC.=$c['tem_tema']
			." ".
			$respC.=$c['con_contenido'];
		} */


		$msg = ["titulo" => $resp, "contenido" => $contenido];
		return view('layouts/header') . view('welcome_message', $msg) . view('layouts/footer');
	}


	//deber semana 7
	public function libros()
	{

		$sql = new portadaModel();
		$libros = $sql->librosModel();
		$msg = ["libros" => $libros];


		return view('layouts/header') . view('deber', $msg) . view('layouts/footer');
	}

	//buscador
	public function buscar()
	{
		$codigo = $_POST['codigo'];

		$sql = new portadaModel();
		$libros = $sql->librosModel();

		$resp = "";
		foreach ($libros as $l) {
			if ($l['lib_codigo'] == $codigo) {
				$resp = $l['lib_titulo'];
			}
		}

		$respu = "";
		foreach ($libros as $l) {
			if ($l['lib_codigo'] == $codigo) {
				$respu = $l['lib_resumen'];
			}
		}

		return view('layouts/header')
			. view('busqueda', ["titulo" => $resp, "resumen" => $respu])
			. view('layouts/footer');
	}
}
