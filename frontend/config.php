<?php

ini_set( "display_errors", true );

date_default_timezone_set( "Europe/Moscow" );  // http://www.php.net/manual/en/timezones.php

define( "DB_DSN", "mysql:host=localhost;dbname=docker" );

define( "DB_USERNAME", "docker" );

define( "DB_PASSWORD", "docker" );



define( "ADMIN_USERNAME", "docker" );

define( "ADMIN_PASSWORD", "docker" );



function handleException( $exception ) {

  echo "Sorry, a problem occurred. Please try later.";

  error_log( $exception->getMessage() );

}



set_exception_handler( 'handleException' );



