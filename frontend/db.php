<?php

/*
$dbhost = "localhost";
$dbuser = "docker"; //root
$dbpass = "docker"; //root
$dbname = "docker";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//s$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
    die("Не удалось подключиться к БД ".$mysqli->connect_error);
}
*/


ini_set( "display_errors", true );

date_default_timezone_set( "Europe/Moscow" );  // http://www.php.net/manual/en/timezones.php
define( "CHARSET" ,"utf8") ;
define( "COLLATE","utf8_general_ci");
define( "DB_DSN", "mysql:host=localhost;dbname=docker" );
define( "DB_HOST", "database" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "tiger" );
define( "ADMIN_USERNAME", "docker" );
define( "ADMIN_PASSWORD", "tiger" );
define( "DB_DATABASE", "docker" );

$mysqli = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
mysqli_set_charset($mysqli,CHARSET);

if ($mysqli->connect_error) {
    die("Не удалось подключиться к БД " . $mysqli->connect_error);
}


function handleException( $exception )
{

    echo "Sorry, a problem occurred. Please try later.";

    error_log($exception->getMessage());

}
