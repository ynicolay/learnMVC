<?php
include "config.php";
include "connection.php";

//ROUTER
if (isset($_GET['page']) && !empty($_GET['page'])) {
	switch ($_GET['page']) {
		case 'content':
			$view = "view/content.php";
			$controller = "controller/content_controller.php";
			include $controller;
		break;
		default:
			$view = "view/home.php";
			$controller = "controller/home_controller.php";
			include $controller;
			include "model/home_model.php";
		break;
	}
}	else {
	$view = "view/home.php";
}


//RENDERER
include "view/head.php";
include "view/header.php";
include $view;
include "view/footer.php";
?>
