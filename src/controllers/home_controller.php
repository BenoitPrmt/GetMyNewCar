<?php

$car = new Car([
    'id' => 1,
    'brand' => 'Renault',
    'model' => 'Clio',
    'price' => 10000,
    'kilometers' => 20000,
    'image' => 'https://www.laboutique-egarage.com/cdn/shop/files/CLIO2AVEXT.jpg?v=1690458450',
    'year' => 2019,
    'isSold' => false
]);
$carManager->createOne($car);

require './src/views/home.phtml';