<?php
if(preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT']))
{
    header("Location: iepage.html");
    die();
}
else
{
    // if IE=>11
    //Nothing to see here .....
}
?>

<?php
require 'nav.php';
?>

<html>

<head>
	<title>Home - Zeryter.tk</title>
</head>

<body>

	<div class="sidebar">
		<span class="zerytButtonFlat" style="width: calc(100% - 20px); line-height: 20px; display: inline-block;" onclick="location.href='https://plus.google.com/+OwenHolloway'">Google+</span><br>
		<span class="zerytButtonFlat" style="width: calc(100% - 20px); line-height: 20px; display: inline-block;" onclick="location.href='https://github.com/owen-holloway101'">GitHub</span><br>
	</div>

	<div class="content">
		You have landed on zeryter.tk<br>
		<br>
		Welcome to my corner of the internet!
	</div>
</body>

</html>