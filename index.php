<?php
include "SessionFunctions.php";
include "Product.php";
include "controllers/PageController.php";
include "CRUD.php";
include "models/ModelFactory.php";
session_start();

$crud = new Crud();
$model_factory = new ModelFactory($crud);
$controller = new PageController($model_factory);
$controller->handle_request();

?>