<?php
	require_once('config/config.php');
	require_once('Controllers/ControllerData.php');

	$action = isset($_GET['action']) ? $_GET['action'] : 'index';

	$ControllerNew = new ControllerData();

	switch ($action) {
		case 'create':
			$ControllerNew->createData();
			break;
		case 'store':
			$ControllerNew->storeData();
			break;
		case 'show':
			$id = $_GET['id'];
			$ControllerNew->showById($id);
			break;
		case 'edit':
			$id = $_GET['id'];
			$ControllerNew->editById($id);
			break;
		case 'update':
			$id = $_GET['id'];
			$ControllerNew->updateById($id);
			break;
		case 'delete':
			$id = $_GET['id'];
			$ControllerNew->deleteById($id);
			break;
		default:
			$ControllerNew->Home();
	}
?>
