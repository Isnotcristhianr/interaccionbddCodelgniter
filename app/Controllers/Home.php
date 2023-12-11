<?php

namespace App\Controllers;

use App\Models\librosModel;
use App\Models\portadaModel;
use App\Models\temaModel;
use CodeIgniter\CLI\Console;

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

		/* tema */
		$sql2 = new temaModel();
		$temas = $sql2->listarTemas();


		$msg = ["libros" => $libros, "temas" => $temas];



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

	//temas
	public function obtenerLibros()
	{

		header('Content-Type: text/plain');

		$id = $_POST['tema'];

		/* unir 3 tablas, 2 normales 1 intermedia */
		$db = \Config\Database::connect();
		$builder = $db->table('tbl_libros a');

		$builder->select(
			'a.lib_id,
			 a.lib_titulo,
			 a.lib_codigo,
			 a.lib_precio,
			 a.lib_resumen,
			 b.tem_tema'
		);
		$builder->join('tbl_tema b', 'a.tem_id=b.tem_id');
		$builder->join('tbl_libros c', 'a.lib_id=c.lib_id');
		$query = $builder->get();
		$libros = $query->getResultArray();

		$resp = "";
		foreach ($libros as $l) {
			if ($l['lib_id'] == $id) {
				$resp .= "<p>" . $l['lib_titulo'] . "</p>";
			}
		}

		return $resp;
	}
}
