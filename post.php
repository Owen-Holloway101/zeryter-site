<?php


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


function insertPost($postData, $postLocation) {
	
	require 'passwords.private';

	try {
	$dbh = new PDO("mysql:host=127.0.0.1;dbname=POST", "root", $sqlPass);
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}

	//Prepared statements make sure that we don't fail and have sql injection ...
	$stmt = $dbh->prepare("INSERT INTO ".$postLocation." (`POSTDATA`) VALUES (:postData);");

	$stmt->bindParam(':postData', $postData);
	//$stmt->bindParam(':postLocation', $postLocation);

	$stmt->execute();

}

require 'session.php';

if ($userPermission >= 90) {
	$postText = $_COOKIE["postText"];
	$postLocation = $_COOKIE["postLocation"];
	echo $postText;
	echo $postLocation;
	insertPost($postText,$postLocation);
	setcookie("postText","",time()-36000);
	setcookie("postLocation","",time()-36000);
}

echo "<html>
<script type='text/javascript'>
	window.location.href='".$postLocation.".php'
</script>
</html>";

?>