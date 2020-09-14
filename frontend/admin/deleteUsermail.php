<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 12.08.2020
 * Time: 18:46
 */


include_once('../db.php');
$mysqli->set_charset("utf-8");
$mysqli->query('SET NAMES `utf8`');

if ($mysqli->connect_error) {
    die("Не удалось подключиться к БД " . $mysqli->connect_error);
}

$id = $_POST['id'];//выносим id в переменную
$result = $mysqli->query("DELETE FROM `mail` WHERE `id`= '$id' ");
if($result) {
    exit("1");
} else {
    exit("Не удалось удалить юзера");
}