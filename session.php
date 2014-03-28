<?php

/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/
error_reporting(0);

$userPermission = 0;

require $_SERVER["DOCUMENT_ROOT"].'/password_compact/lib/password.php';

function getUserName($sessionID) {

	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';

	$user = "null";

	$query = "SELECT ID, USER FROM SESSION";

	if ($stmt = $db->prepare($query)) {

		/* execute statement */
		$stmt->execute();

		/* bind result variables */
		$stmt->bind_result($sessionFromDB, $uname);

		/* fetch values */
		while ($stmt->fetch()) {
			if ($sessionFromDB == $sessionID) {
				$user = $uname;
		}
	}

	/* close statement */
	$stmt->close();

	return $user;	
	}
}

$userName = getUserName($_COOKIE["sessionID"]);


function getUserPermission($user) {

	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';

	$userPermission = 0;

	$query = "SELECT UNAME, PERMISSION FROM USERS";

	if ($stmt = $db->prepare($query)) {

		/* execute statement */
		$stmt->execute();

		/* bind result variables */
		$stmt->bind_result($uname, $permissionFromDB);

		/* fetch values */
		while ($stmt->fetch()) {
			if ($uname == $user) {
				$userPermission = $permissionFromDB;
			}				
		}
	/* close statement */
	$stmt->close();
	
	}

	return $userPermission;

}

$userPermission = getUserPermission($userName);

//echo $userName."<br>";
//echo $userPermission."<br>";

?>
