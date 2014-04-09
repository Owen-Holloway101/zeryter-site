<?php

function deleteSession($sessionID) {
	
	include $_SERVER["DOCUMENT_ROOT"].'/db/userConnect.php';

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