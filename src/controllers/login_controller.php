<?php
if (!empty($_POST)) {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $user = new User(
      [
        'email' => $_POST['email'],
        'password' => $_POST['password']
      ]
    );
    $userInfos = $userManager->getOneByEmail($_POST['email']);
    if ($userInfos['password'] === $_POST['password']) {
      $_SESSION['user'] = [
        'username' => $userInfos['username']
      ];
      ob_clean();
      header('Location:index.php');
      exit();

    } else {
      echo 'Error, wrong password';
    }
  }
}
require './src/views/login.phtml';