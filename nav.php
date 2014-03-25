<!--Owen Holloway Zeryt 2014-->
<?php
require $_SERVER["DOCUMENT_ROOT"].'/session.php';
error_reporting(0);
?>
<head>
	<link rel="stylesheet" type="text/css" href="/mainStyles.css">
	<!--<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 800px)" href="mobileStyles.css" />-->
	<link rel="shortcut icon" href="/assets/zeryt.ico">
</head>

<body>
	<img class="logo" onclick="location.href='/loginUser.php'" src="/assets/zerytLogo.png">
	<div class="nav">
		<span onclick="location.href='/'" class="zerytButtonFlat">Home</span>
		<span onclick="location.href='/about.php'" class="zerytButtonFlat">About</span>
		<span onclick="location.href='/thoughtStream.php'"class="zerytButtonFlat">Thought Stream</span>

		<?php
		if ($userPermission >= 60) {
				echo "<span onclick=location.href='/wol.php' class='zerytButtonFlat'>WOL</span>";
			}
		?>

		<!--*yawn* lazy padding is lazy-->
		<t> &#160;&#160; Zeryter: that one guy that does stuff on the internet</t>
	</div>
	<?php
	//return $_SERVER["HTTP_USER_AGENT"];
	if ($userName != "null") {
		echo "
		<div class='loginInfo'>";
		echo "<a style='color: #ffffff; text-decoration: none' href='/logout.php'>".$userName."<a/>";
		echo "
		</div>
		";
	}
	?>
</body>