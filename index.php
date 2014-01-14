<?php
if ( preg_match("/MSIE/",$_SERVER['HTTP_USER_AGENT']) ) {
        header("Location: iepage.html");
	die();
}
?>
<!-- Owen Holloway 2013 ZerytSoft -->
<html>

<head>
<title>Zeryter - Home</title>
<link rel="shortcut icon" href="assets/icon.ico">
<link rel="stylesheet" type="text/css" href="styles.css">
<script>
</script>
</head>

<body>
<?php
include("nav.html");
?>
<div id='post'>
<t>You have landed on zeryter.tk</t><br>
<br>
<t>Welcome.</t><br>
</div>
<!---
<img class=zeryterLogo src=/assets/zeryt.png></img>
-->
</body>

<style>
img.zeryterLogo {
z-index: 0;
margin-top: 10px;
left: 25%;
width: 50%;
height: auto;
}
</style>

<html>
