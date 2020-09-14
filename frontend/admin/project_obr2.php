<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 08.08.2020
 * Time: 01:57
 */
include_once('./db.php');

header('Content-type: text/html; charset=utf-8');

if ($mysqli->connect_error) {
    die("Не удалось подключиться к БД ".$mysqli->connect_error);
}
$result =$mysqli->query("SELECT * FROM `projects` WHERE 1");

for($data= []; $row = $result->fetch_assoc(); $data[] = $row );
//echo var_dump($data);
//exit($data); //вернуть
exit(json_encode($data));// вернуть в закодир виде
