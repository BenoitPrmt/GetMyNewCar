<?php

var_dump($_POST);

if(!empty($_POST)) {
    $car = new Car([
        'brand' => $_POST['brand'],
        'model' => $_POST['model'],
        'kilometers' => $_POST['kilometers'],
        'year' => $_POST['year'],
        'price' => $_POST['price'],
        'image' => $_POST['image'],
        'userId' => $_SESSION['user']['userId'],
        'isSold' => false
    ]);
    $carId = $carManager->createOne($car);
    ob_clean();
    header('Location: ?page=home');
    exit;
}

require './src/views/add_car.phtml';