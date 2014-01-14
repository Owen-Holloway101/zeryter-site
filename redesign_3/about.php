<!-- Owen Holloway 2013 zerytsoft-->
<?php
include "simplemethods.php";
?>
<html>

<head>

	<title>Zeryt - About</title>
	<link rel="shortcut icon" href="assets/icon.ico" >
	<link rel="stylesheet" type="text/css" href="styles.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body class="preload">
	<?php
	include("nav.html");
	?>

	<div id="wrapper">
	<?php
	headedpost("Hello there friend","Hi I am Zeryter, I am a college (year 12 because Australia) 
	student, hacker and music lover. You have found my home on the internet, its not a very 
	interesting place and I mainly use it for learning how to code in html php and css 
	(javascript when I can be bothered). Its kinda a waste to have this on its own page 
	but eh whatever.");
	
	headedpost("True Facts About This Website","<li>It is hosted on a 2g MC model iPod touch jailbroken with greenposi0n!</li>
	<li>It uses php javascript and css that is all self taught</li>
	<li>The background image was taken by mistake an looks pretty swell</li>
	<li>I made it because procrastnation .....</li>");
		
	?>
	</div>

</body>

<script>
$("window").load(function() {
  $("body").removeClass("preload");
});
</script>

</html>
