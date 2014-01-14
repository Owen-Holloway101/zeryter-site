<?php
if ( preg_match("/MSIE/",$_SERVER['HTTP_USER_AGENT']) ) {
        header("Location: iepage.html");
	die();
}
?>
<!-- Owen Holloway 2013 zerytsoft-->
<html>
<head>

<title>Zeryt - New User</title>
<link rel="shortcut icon" href="assets/icon.ico" >
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>

<?php
include("nav.html");
?>

<div style="margin-left: 20%; margin-right: 20%;margin-top: 10%;" id=post>
<input id="betterTextBox" /*           */ name="user" placeholder="Username"></input><br>
<input id="betterTextBox" /*           */ name="user" placeholder="Email" style="width: 300px;"></input><br>
<input id="betterTextBox" type="password" name="pass" placeholder="Password"></input><br>
<input id="betterTextBox" type="password" name="pass" placeholder="Password Check"></input>
</div>

</body>

</html>
