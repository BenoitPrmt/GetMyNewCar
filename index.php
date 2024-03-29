<?php
global $bdd;
require './src/core.php';

require './src/classes/managers/Manager.php';

require './src/classes/managers/CarManager.php';
require './src/classes/Car.php';

require './src/classes/managers/UserManager.php';
require './src/classes/User.php';

$carManager = new CarManager($bdd, 'cars');
$userManager = new UserManager($bdd, 'users');

$availableRoutes = ['home', 'register', 'login', 'disconnect', 'add_car'];

$route = 'home';
if (isset($_GET['page']) and in_array($_GET['page'], $availableRoutes)) {
    $route = $_GET['page'];
}

require './src/views/layout.phtml';
