<?php

include_once('../db.php');

header('Content-type: text/html; charset=utf-8');

$name = $_POST['name'];
$imageLink = $_POST['imageLink'];
$description = $_POST['description'];

$name = trim($name);
$imageLink = trim($imageLink);
$description = trim($description);

$name = htmlspecialchars($name);
$imageLink = htmlspecialchars($imageLink);
$description = htmlspecialchars($description);

if ($mysqli->connect_error) {
    die("Не удалось подключиться к БД ".$mysqli->connect_error);
}

if (empty($name) ||  empty($imageLink) || empty($description)) {
    exit("Не все поля заполнены");
}
$result = $mysqli->query("INSERT INTO `projects`( `name`, `imageLink`, `description`) VALUES ('$name', '$imageLink', '$description') ");
if ($result) {
    exit("1");
} else {
    exit("Добавление не удалось");
}