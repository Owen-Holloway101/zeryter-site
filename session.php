<?php
//I am aware of the complete and utter insecurity of this current system, but I just don't care.

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$loggedin = 0;
$my_file = 'currentSession';
$handle = fopen($my_file, 'r') or die('Cannot open file:  '.$my_file);
$data = fread($handle,filesize($my_file));
if ($data == $_COOKIE["session"]) {
	$loggedin = 1;
	echo "logged in";
	//echo "<br>";
	//echo $data;
	//echo "<br>";
	//echo $_COOKIE["session"];
} else {
	echo "not logged in";
	//echo "<br>";
	//echo $data;
	//echo "<br>";
	//echo $_COOKIE["session"];
}
fclose($handle);
?>