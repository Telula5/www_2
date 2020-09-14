<?php

include_once('../db.php');
$mysqli->set_charset("utf-8");
$mysqli->query('SET NAMES `utf8`');


$id = $_POST['id'];//выносим id в переменную
$result = $mysqli->query("DELETE FROM `projects` WHERE `id`= '$id'");
if($result) {
    exit("1");
} else {
    exit("Не удалось удалить юзера");
}