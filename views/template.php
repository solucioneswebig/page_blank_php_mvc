<?php

$url_sitio    = ctrRuta();
$url_servidor = ctrRuta(); 


$title = "QOSI";

include "includes/header.php";






if(isset($_GET["slug"])){

	$rutas = explode("/", $_GET["slug"]);


	if ($rutas[0] == "inicio"){


		include "modules/home.php";

	}else{

		include "modules/404.php";
	}	

}else{

		include "modules/home.php";
 
}




include "includes/footer.php";