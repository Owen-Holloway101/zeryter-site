<?php
require 'nav.php';
require 'db/userConnect.php';
?>
<html>

<head>
	<title>New User</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	function createUser () {
		var user = $("input#username").val();
		var pass = $("input#password").val();
		var passCheck = $("input#passwordCheck").val();
		if (pass == passCheck) {
			var expDate = new Date();
			expDate.setTime(expDate.getTime()+(60*60)); //set to an hour from Now
			document.cookie="newUser=" + user + ";" + expDate;
			document.cookie="newPass=" + pass + ";" + expDate;
			window.location.href="createUser.php";
		} else {
			$("#passCheckOut").text("Passwords need to match");
		}
	}
	</script>
</head>

<body>
	<div class="content">
	<?php 
	if (isset($_COOKIE["userStatus"])) {

		echo $_COOKIE["userStatus"];
		setcookie("userStatus", "",time()-3600);
		
	} else {
		echo '
		<input class="zerytInput" /*           */ name="user" placeholder="Username" /* */ id="username" /**/></input><br>
		<input class="zerytInput" type="password" name="pass" placeholder="Password" /* */ id="password" /**/></input><br>
		<input class="zerytInput" type="password" name="pass" placeholder="Password Again" id="passwordCheck"></input><span style="margin-left: 10px ;" id="passCheckOut"></span><br>
		<span  class="zerytButtonFlat" style="display: inline-block; magin-left: 10px;" onClick=createUser()>Create User</span>
		';
	}
	?>
	</div>
</body>

</html>