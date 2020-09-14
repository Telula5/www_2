<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 12.08.2020
 * Time: 17:32
 */

include_once('../db.php');
$mysqli->set_charset("utf-8");
$mysqli->query('SET NAMES `utf8`');

if ($mysqli->connect_error) {
    die("Не удалось подключиться к БД ".$mysqli->connect_error);
}

$result =$mysqli->query("SELECT * FROM `mail` WHERE 1"); //выбрать все записи из табл где 1- ( то есть tru - вообще сущ-ет запись)- те выбрать все записи
for($data= []; $row = $result->fetch_assoc(); $data[] = $row );
//echo var_dump($data);
//exit($data); //вернуть
exit(json_encode($data));// вернуть в закодир виде