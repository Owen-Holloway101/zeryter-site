<?php


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


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
			echo "userExists"."<br>";
		} else {
			return False;
			echo "userNotExists"."<br>";
		}	
	}
}

function checkSalt($user, $pass) {

	include 'db/userConnect.php';

	

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

$user = $_COOKIE["user"];
$pass = $_COOKIE["pass"];

if (userExists($user)) {
	$passAccepted = checkSalt($user, $pass);
}

if ($passAccepted) {
	setcookie("loginStatus", "pass correct",time()+3600);
} else {
	setcookie("loginStatus", "User does not exist or pass incorrect",time()+3600);
};

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
?>

<html>
<script type="text/javascript">
	window.location.href="loginUser.php"
</script>
</html>