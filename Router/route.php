<?php
require_once "Controllers/BaseController.php";
require_once "Router.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/UserController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);

// User routes
$route->get("/user", [UserController::class, 'index']);
$route->get("/user/create", [UserController::class, 'create']);
$route->post("/user/store", [UserController::class, 'store']);
$route->get("/user/edit/{id}", [UserController::class, 'edit']);
$route->put("/user/update/{id}", [UserController::class, 'update']);
$route->delete("/user/delete/{id}", [UserController::class, 'destroy']);

$route->route();