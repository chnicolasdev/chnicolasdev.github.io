<?php

class MvcController{

	public function Inicio()
    {

		include "views/inicio.php";

	}

	#ENLACES
	#-------------------------------------
	public function enlacesPaginasController()
    {
		if(isset( $_GET['action']))
        {

			$enlaces = $_GET['action'];

		}
		else
        {

			$enlaces = "inicio";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		// $respuesta = new Paginas();
		// $respuesta -> enlacesPaginasModel($enlaces);
		// print_r($respuesta);
		// var_dump($respuesta);
		include $respuesta;
	}

}

?>
