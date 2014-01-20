<?php

/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/

function userExists($user) {

	include 'db/userConnect.php';

	$userExists = False;

	$query = "SELECT UNAME, SPASS FROM USERS";

	if ($stmt = $db->prepare($query)) {

		/* execute statement */
		$stmt->execute();

		/* bind result variables */
		$stmt->bind_result($uname, $spass);

		/* fetch values */
		while ($stmt->fetch()) {
			if ($uname == $user) {
				$userExists = True;
		}
	}

	/* close statement */
	$stmt->close();

		if ($userExists) {
		return True;
	} else {
		return False;
	}	
}

}

function insertNewUser($user, $pass) {
	
	require 'passwords.private';

	try {
	$dbh = new PDO("mysql:host=127.0.0.1;dbname=LOGIN", "root", $sqlPass);
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}

	//Prepared statements make sure that we don't fail and have sql injection ...
	$stmt = $dbh->prepare("INSERT INTO `USERS` (`UNAME`, `SPASS`) VALUES (:user, :saltedPass)");
	
	$options = array('cost' => 11);
	$passHash = password_hash($pass, PASSWORD_BCRYPT, $options);

	$stmt->bindParam(':user', $user);
	$stmt->bindParam(':saltedPass', $passHash);

	$stmt->execute();

}
if(isset($_COOKIE["newUser"])) { 
	if (userExists($_COOKIE["newUser"])) {
		setcookie("newUser", "", time()-3600);
		setcookie("newPass", "", time()-3600);
		setcookie("userStatus", "user exists",time()+3600);
	} else {
		insertNewUser($_COOKIE["newUser"],$_COOKIE["newPass"]);
		setcookie("newUser", "", time()-3600);
		setcookie("newPass", "", time()-3600);
		setcookie("userStatus", "user exists",time()+3600);
	}
} else {
	setcookie("userStatus", "user exists",time()+3600);
}
?>
<html>
<script type="text/javascript">
	window.location.href="newUser.php"
</script>
</html>