<!--This is the post funtion sheet-->
<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require 'session.php';

if ($loggedin == 1) {
	echo "loggedin";
	echo "<br>";
	$postData = $_COOKIE["post"];
	$data =  "<div id=post>" . $postData . "</div> \n";
	echo $data;
	$data .= file_get_contents('thoughtStream.post');
	echo file_put_contents("thoughtStream.post",$data);
} else {
	echo "notlogged";
}
?>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	window.location.href="thoughtStream.php";
	</script>
</head>
<body>

</body>
</html>
<head>