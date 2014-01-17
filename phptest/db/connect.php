<?php
//error reporting on/off 
/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/
//inits the variable $db with the connection to the server
require "dblogin.private";
$db = setDB();

if($db->connect_errno > 0) {
	die("DB fail <br>");
} else {
	echo("DB connected <br>");
}

?>