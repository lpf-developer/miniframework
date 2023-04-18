<?php

	require_once "../vendor/autoload.php";
	echo 'Isso está funcionando';
	$route = new \App\Route;
	dump($route->getUrl())

?>