<?php

session_start();
ob_start();

global $bdd;

if (PHP_OS == 'WINNT') {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=get_my_new_car;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
} else if (PHP_OS == 'Darwin') {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=get_my_new_car;charset=utf8', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
} else {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=get_my_new_car;charset=utf8', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}


