<!DOCTYPE html>
<html>
<head>
<header>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="index_css.css" />
<link rel="shortcut icon" href="Imagenes/favicon.ico" />


<?php
require 'core/init.php';
include 'controller.php';


if(isset($_GET["secc"])){
	$section = $_GET["secc"];
}else{
	$section = "";
}
if($section=="testReservations"){
	include 'reservations.php';
	
	$servername = "localhost:7777";
	$username = "test";
	$password = "test";
	
	$reservations = new Reservations($servername, $username, $password);
	
}else{
	$controller = new Controller($section);
	$controller->createTitle();
	?>

	</header>
	</head>

	<body>
				
	<?php
	$controller->openMainContainer();
	$controller->createHeader();
	$controller->createSidebar();
	$controller->createContent();
	$controller->createFooter();
	$controller->closeMainContainer();
	?>

	</body>
}
</html> 