<?php namespace App\Controllers;

use App\Models\portadaModel;

class Home extends BaseController
{
	public function index()
	{
		$sql= new portadaModel();
		
		//titulo
		$resp="";
		$titulo= $sql->tituloModel();
		foreach($titulo as $t){
			$resp=$t['POR_TITULO'];
		}

		//contenido
		$respC="";
		$contenido = $sql->contenidoModel();
	/* 	foreach($contenido as $c){
			$respC.=$c['tem_tema']
			." ".
			$respC.=$c['con_contenido'];
		} */

		
		 $msg=["titulo"=>$resp,"contenido"=>$contenido];
		return view('layouts/header').view('welcome_message',$msg).view('layouts/footer'); 
	}




}
