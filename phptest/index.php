<?php

//Connect to the DB!
require "db/connect.php";

//Connects to the DB and queries             if query fails it outputs error and dies
$result = $db->query("SELECT * FROM people") or die($db->error);

//check that the DB has got rows, if not something funky is happening
if ($result->num_rows) {
	
}

?>