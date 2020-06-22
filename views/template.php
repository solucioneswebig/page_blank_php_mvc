<?php

$url_sitio    = ctrRuta();
$url_servidor = ctrRuta(); 


if(isset($_GET["slug"])){

	$rutas = explode("/", $_GET["slug"]);


	if ($rutas[0] == "inicio"){
		$title = "Home - Shared links";
		include "includes/header.php";
		include "modules/home.php";
	}elseif($rutas[0] == "acceder"){
		$title = "Acceder - Shared links";
		include "includes/header.php";
		include "modules/acceder.php";
	}elseif($rutas[0] == "mi-cuenta"){


		if(isset($rutas[1]) && $rutas[1] == "links"){

			$title = "Generador de links - Shared links";
			include "includes/header.php";
			include "admin/dashboard.php";

		}else{

			$title = "Mi cuenta - Shared links";
			include "includes/header.php";
			include "admin/dashboard.php";

		}


		
	}else if($rutas[0] == "logout"){
	
		session_destroy();

		header("Location: ".$url_sitio."acceder");
	
	}else{
		$title = "Pagina no encontrada - Shared links";
		include "includes/header.php";
		include "modules/404.php";
	}	

}else{
	$title = "Home - Shared links";
	include "includes/header.php";
	include "modules/home.php";
 
}




include "includes/footer.php";