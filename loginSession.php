<?php

require("loginSession.private");

//echo $_COOKIE["test"];
setcookie("test", "", time()-3600);

//echo $_COOKIE["session"]."<br>";
//$my_file = 'currentSession';
//$handle = fopen($my_file, 'r') or die('Cannot open file:  '.$my_file);
//$data = fread($handle,filesize($my_file));
//echo $data;
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>