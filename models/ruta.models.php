<?php 
/**
 * 
 */

	
	
/*=========================================
	=            RUTA DEL CLIENTE            =
	=========================================*/	
	function ctrRuta(){
		$url = "http://".$_SERVER["HTTP_HOST"]."/generador-links/";
		return $url;
	}

	/*=========================================
	=            RUTA DEL SERVIDOR            =
	=========================================*/
	function ctrRutaServidor(){
		$url = "http://".$_SERVER["HTTP_HOST"]."/generador-links/";
		return $url;
	}
