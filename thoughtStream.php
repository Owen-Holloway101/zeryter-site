<?php
if ( preg_match("/MSIE/",$_SERVER['HTTP_USER_AGENT']) ) {
        header("Location: iepage.html");
	die();
}
?>
<!-- Owen Holloway 2014 ZerytSoft -->
<html>

<?php
//I am aware of the complete and utter insecurity of this current system, but I just don't care.

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$loggedin = 0;
$my_file = 'currentSession';
$handle = fopen($my_file, 'r') or die('Cannot open file:  '.$my_file);
$data = fread($handle,filesize($my_file));
if ($data == $_COOKIE["session"]) {
	$loggedin = 1;
	echo "logged in";
	//echo "<br>";
	//echo $data;
	//echo "<br>";
	//echo $_COOKIE["session"];
} else {
	echo "not logged in";
	//echo "<br>";
	//echo $data;
	//echo "<br>";
	//echo $_COOKIE["session"];
}
fclose($handle);
?>

<head>
	<title>Zeryter - Thought Stream</title>
	<link rel="shortcut icon" href="assets/icon.ico">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<?php
	if ($loggedin == 1) {
		echo '
		<script type="text/javascript">
			
			function newPost() {
				console.log("New Post");
				var text = $("textarea#betterTextArea").val();
				$("textarea#betterTextArea").val("");
				console.log(text);
			}
		</script>';
	}
	?>
	<script type="text/javascript">
		function iamzeryter(pass) {
			console.log(name);
			var expDate = new Date();
			expDate.setTime(expDate.getTime()+(60*60)); //set to an hour from Now
			document.cookie="name=" + name + ";" + expDate;
			document.cookie="test=" + pass + ";" + expDate;
			window.location.href="loginSession.php";
		}

	</script>
</head>

<body>
	<?php
	include("nav.html");
	?>
	
	<div id="post">
		<t>This is the Zeryter thought stream (aka a blog fools) .... its also currently in dev</t>
	</div>
	<?php
	if ($loggedin == 1) {
		echo '
		<div id="post">
			<textarea id="betterTextArea" name="postText"></textarea>
			<button onclick=newPost(); class=zerytButton style="margin-left: 10px; padding-left: 20px; padding-right: 20px;">Post</button>
		</div>
		';
	}
	?>
</body>

</html>