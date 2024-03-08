<?php

if (!empty($_POST)) {
    $user = new User([
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);
    $userId = $userManager->createOne($user);

    if(isset($_POST['remember'])) {
        $_SESSION['user'] = [
            'username' => $_POST['username']
        ];
    }

    ob_clean();
    header('Location: ?page=home');
    exit;
}

require './src/views/register.phtml';