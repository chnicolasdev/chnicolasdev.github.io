<?php

class Paginas
{
	public static function enlacesPaginasModel($enlaces)
    {
		switch ($enlaces)
        {
			#INICIO
			case 'inicio':
				$module =  "views/inicio.php";
				break;

			#ABOUT
			case 'about':
				$module =  "views/about.php";
				break;

			default:
				$module =  "views/inicio.php";
				break;

		}
		// FIN SWITCH
		return $module;
	}
}
// FIN CLASS PAGINAS
