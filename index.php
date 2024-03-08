<?php

require './src/core.php';

$availableRoutes = ['home'];

$route = 'home';
if (isset($_GET['page']) and in_array($_GET['page'], $availableRoutes)) {
    $route = $_GET['page'];
}

require './views/layout.php';
