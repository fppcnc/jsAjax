<?php
include 'classes/User.php';
$user =  $_POST['user'];
$direct = json_decode($user);

echo var_dump($direct);

$realUser = new User($direct->name, $direct->time);
echo '<br>';

echo var_dump($realUser);