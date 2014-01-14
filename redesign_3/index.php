<?php
if ( preg_match("/MSIE/",$_SERVER['HTTP_USER_AGENT']) ) {
        header("Location: getfucked.html");
	die();
}
?>
<!-- Owen Holloway 2013 zerytsoft-->
<?php
include "simplemethods.php";
?>
<html>

<head>

<title>Zeryt - Home</title>
<link rel="shortcut icon" href="assets/icon.ico" >
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body class="preload">
<?php
include("nav.html");
?>
<?php

	
headedpost("Hello World!","Major redesign ... yeah thats what it is and I think its fairly awesome");
?>

<?php
$post1 = "
Hello Zeryter here. <br>
<br>
This site is going to be very stagnant untill I can actually be bothered to 
continue development on it. AKA Exams are a thing I have to do so I do not 
have the time to work on random projects that take my fancy.<br>
<br>
Okay so maybe that is a little bit of a lie but well, my procrastination > your procrastination
"

?>

<?php
headedpost("Another Test Post",$post1);

post("Zeryter is pissed, and wishes he could have faith in people.");

/*
for ($i = 0; $i < 100; $i++) {
post("This is a test post No.".$i."<br>"."Test line 1"."<br>"."Test line 2");
}
*/
?>

</body>

<script>
$("window").load(function() {
  $("body").removeClass("preload");
});
</script>

</html>
