<?php
global $bdd;
require './src/core.php';

require './src/classes/managers/Manager.php';
require './src/classes/managers/CarManager.php';
require './src/classes/Car.php';
$carManager = new CarManager($bdd, 'cars');

$availableRoutes = ['home'];

$route = 'home';
if (isset($_GET['page']) and in_array($_GET['page'], $availableRoutes)) {
    $route = $_GET['page'];
}

require './src/views/layout.phtml';
