<?php 

$app['database']->insert('users', [
   'name' => $_POST['name'],
   'email' => $_POST['email'],
   'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
]);

header('Location: /');