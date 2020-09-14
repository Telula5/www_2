<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 11.08.2020
 * Time: 15:24
 */


include_once('../db.php');

header('Content-type: text/html; charset=utf-8');

$email = $_POST['email'];


$email = trim($email);


$email = htmlspecialchars($email);


if ($mysqli->connect_error) {
    die("Не удалось подключиться к БД ".$mysqli->connect_error);
}

if (empty($email) ) {
    exit("Введите Email!");
}
$result = $mysqli->query("SELECT  `email` FROM `mail` WHERE `email`='$email' ");
if ($result->num_rows) { // результат всегда 1=> надо по rows
    exit ("Email уже зарегестрирован");
}
else
{
    $result = $mysqli->query("INSERT INTO `mail`( `email`) VALUES (  '$email') ");
    if ($result) {
        exit("1");
    } else {
        exit("Добавление не удалось");
        echo mysqli_error();
        echo "Oshibka".mysqli_error($mysqli);
    }


}


$result = $mysqli->query("INSERT INTO `mail`( `email`) VALUES (  '$email') ");
if ($result) {
    exit("1");
} else {
    exit("Добавление не удалось");
    echo mysqli_error();
    echo "Oshibka".mysqli_error($mysqli);
}

