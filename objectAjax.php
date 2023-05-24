<?php
include 'classes/User.php';
$user =  $_POST['user'];
$direct = json_decode($user);

//echo var_dump($direct);

$realUser = new User($direct->name, $direct->time);
echo '<br>';
echo json_encode($realUser);
echo '<br>';

//echo json_encode($realUser);  gives no result back as Attributes are written as "private" in class.

// we can instead create a function inside the class to achieve the same result
//echo $realUser->jsonSerialize(); now this is replaced by the serialization in class