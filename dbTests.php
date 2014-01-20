<?php

include "db/userConnect.php";

$query = "SELECT UNAME, SPASS, SALT FROM USERS";

if ($stmt = $db->prepare($query)) {

    /* execute statement */
    $stmt->execute();

    /* bind result variables */
    $stmt->bind_result($uname, $spass, $salt);

    /* fetch values */
    while ($stmt->fetch()) {
    	if ($uname == "asdffd") {
    		printf ("%s %s %s <br>", $uname, $spass, $salt);

    	}
    }

    /* close statement */
    $stmt->close();
}

?>