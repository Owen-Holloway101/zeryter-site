<?php

/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/

function deleteSession($sessionID) {
	
	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';

	//Prepared statements make sure that we don't fail and have sql injection ...
	$stmt = $dbh->prepare("DELETE FROM `SESSION` WHERE ID=:sessionID");

	$stmt->bindParam(':sessionID', $sessionID);

	$stmt->execute();

}

deleteSession($_COOKIE["sessionID"]);

require $_SERVER["DOCUMENT_ROOT"].'/password_compact/lib/password.php';

function userExists($user) {

	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';

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
			echo "userExists"."<br>";
		} else {
			return False;
			echo "userNotExists"."<br>";
		}	
	}
}

function checkSalt($user, $pass) {

	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';
	//require 'password_compact/lib/password.php';
	

	$sPassFound = False;
	$passAccepted = False;
	$sPassword = "null";

	$query = "SELECT UNAME, SPASS FROM USERS";
	
	if ($stmt = $db->prepare($query)) {
		
		/* execute statement */
		$stmt->execute();
		
		/* bind result variables */
		$stmt->bind_result($uname, $spass);
		
		/* fetch values */
		while ($stmt->fetch()) {
			if ($uname == $user) {
				
				$sPassword = $spass;
				$sPassFound = True;
			}
		}
		
		$stmt->close();
		
		if ($sPassFound) {
			$options = array('cost' => 11);

			if (password_verify($pass, $sPassword)) {
				return True;
			} else {
			    
			}
		} else {
			setcookie("loginStatus", "User does not exist or pass incorrect",time()+3600);
		}
	}
}

function setSession($user, $sessionID) {
	
	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';

	//Prepared statements make sure that we don't fail and have sql injection ...
	$stmt = $dbh->prepare("INSERT INTO `SESSION` (USER, ID) VALUES (:user,:sessionID)");

	$stmt->bindParam(':user', $user);
	$stmt->bindParam(':sessionID', $sessionID);

	$stmt->execute();

}

function checkSession() {
	
	//test code .... I am leaving this here as example code, why beucause I bloody feel like it thats why
	/*
	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';

	$runs = 0;

	$query = "SELECT TIMESTAMPDIFF(HOUR,TIMECREATED,NOW()) FROM SESSION";

	//Prepared statements make sure that we don't fail and have sql injection ...
	if ($stmt = $db->prepare($query)) {
		$stmt->execute();
		$stmt->bind_result($dateDiff);

		// fetch values 
		while ($stmt->fetch()) {
			echo($dateDiff."<br>");
			$runs++;
		}
		
		$stmt->close();

	}
	*/

	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';

	//Prepared statements make sure that we don't fail and have sql injection ...
	$stmt = $dbh->prepare("DELETE FROM SESSION WHERE TIMESTAMPDIFF(HOUR,TIMECREATED,NOW())>336");

	$stmt->execute();

}

function generateSessionID() {
	$length = 32;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$user = $_COOKIE["user"];
$pass = $_COOKIE["pass"];

if (userExists($user)) {
	$passAccepted = checkSalt($user, $pass);
}

if ($passAccepted) {
	setcookie("loginStatus", "pass correct, logged in",time()+3600);
	$newSessionID = generateSessionID();
	//Save session into the DB
	setSession($user,$newSessionID);
	//Set to expire in a day from now (now being whenever the session is handed out)
	setcookie("sessionID",$newSessionID,time()+1209600); //session is set to expire in 2 weeks from now
} else {
	setcookie("loginStatus", "User does not exist or pass incorrect",time()+3600);
};

checkSession();

function userLogin() {

}

/*
$options = array('cost' => 11);
$passHash = password_hash($pass, PASSWORD_BCRYPT, $options);
echo $passHash."\n";

if (password_verify($pass, $passHash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
*/

//Lets get rid of those () cookies
setcookie("user","",time()-36000);
setcookie("pass","",time()-36000);

?>

<html>
<!---->
<script type="text/javascript">
	window.location.href="loginUser.php"
</script>
</html>