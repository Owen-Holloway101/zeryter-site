<?php
require 'nav.php';
require 'db/userConnect.php';
?>
<html>

<head>
	<title>Login User</title>
</head>

<body>
	<div class="content">
		<input class="zerytInput" /*           */ name="user" placeholder="Username" /* */></input><br>
		<input class="zerytInput" type="password" name="pass" placeholder="Password" /* */></input><br>
		<span class="zerytButtonFlat" style="display: inline-block; magin-left: 10px;">LOGIN</span>
	</div>
</body>

</html>