<?php

require "db/connect.php";

$result = $db->query("SELECT * FROM people") or die($db->error);

//$result->

if ($result->num_rows) {
	echo "YAY <br>";
}

?>