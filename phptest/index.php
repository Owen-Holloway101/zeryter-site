<?php

require "db/connect.php";

$result = $db->query("SELECT * FROM people") or die($db->error);

if ($result->num_rows) {
	echo "YAY";
}

?>