<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
<h1>Welcome PHP MVC Web Application</h1>

<?php
//var_dump($data);
//var_dump($data['users']);
$users=$data['users'];
foreach ($users as $user): ?>

<p>Name: <?= $user ?></p>

<?php endforeach; ?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum incidunt maxime nisi quasi quod reiciendis
    sed sint soluta ullam, vero, voluptate, voluptatibus. Dolorum maiores nisi repudiandae sapiente sit, unde!</p>
</body>
</html>
