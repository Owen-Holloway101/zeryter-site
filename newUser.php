<?php
require 'nav.php';
require 'db/userConnect.php';
?>
<html>

<head>
	<title>New User</title>
</head>

<body>
	<div class="content">
		<input class="zerytInput" /*           */ name="user" placeholder="Username" /* */></input><br>
		<input class="zerytInput" type="password" name="pass" placeholder="Password" /* */></input><br>
		<input class="zerytInput" type="password" name="pass" placeholder="Password Again"></input>
	</div>
</body>

</html>