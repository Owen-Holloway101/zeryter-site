<?php

function deleteSession($sessionID) {
	
	require $_SERVER["DOCUMENT_ROOT"].'/passwords.private';

	try {
	$dbh = new PDO("mysql:host=127.0.0.1;dbname=LOGIN", "root", $sqlPass);
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}

	//Prepared statements make sure that we don't fail and have sql injection ...
	$stmt = $dbh->prepare("DELETE FROM `SESSION` WHERE ID=:sessionID");

	$stmt->bindParam(':sessionID', $sessionID);

	$stmt->execute();

}

deleteSession($_COOKIE["sessionID"]);

setcookie("sessionID","null");
?>
<html>
<script type="text/javascript">
	window.location.href="/";
</script>
</html>