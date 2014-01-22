<?php
require 'nav.php';
?>
<html>

<head>
	<title>Login User</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	function login () {
		var user = $("input#username").val();
		console.log(user);
		var pass = $("input#password").val();
		console.log(pass);
		var expDate = new Date();
		expDate.setTime(expDate.getTime()+(60*15)); //set to an 1/4 hour from Now
		document.cookie="user=" + user + ";" + expDate;
		document.cookie="pass=" + pass + ";" + expDate;
		window.location.href="login.php";
	}
	</script>
</head>

<body>
	<div class="content">
	<?php
	if (isset($_COOKIE["loginStatus"])) {

		echo $_COOKIE["loginStatus"];
		setcookie("loginStatus", "",time()-3600);

		echo "
		<script type='text/javascript'>
		$(document).keypress(function(e) {
		if(e.which == 13) {
				console.log('Logging in');
				window.location.href='/';
			}
		});
		</script>
	";
		
	} else {
		echo '
		<script type="text/javascript">
		$(document).keypress(function(e) {
			if(e.which == 13) {
				console.log("Logging in");
				login();
			}
		});
		</script>
		<input class="zerytInput" /*	   */ name="user" placeholder="Username" id="username"></input><br>
		<input class="zerytInput" type="password" name="pass" placeholder="Password" id="password"></input><br>
		<span  class="zerytButtonFlat" style="display: inline-block; magin-left: 10px;" onClick=login()>Login</span>
		';
	}
	?>
	</div>
</body>

</html>