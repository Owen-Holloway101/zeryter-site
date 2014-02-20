<!--Owen Holloway Zeryt 2014-->
<?php
require 'session.php';
error_reporting(-1);

/*======= Useful functions! ===========*/

/* USER-AGENTS (stackoverflow iamandrus)*/
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<head>
	<link rel="stylesheet" type="text/css" href="/mainStyles.css">
	<link rel="shortcut icon" href="/assets/zeryt.ico">
</head>

<body>
	<img class="logo" onclick="location.href='/loginUser.php'" src="/assets/zerytLogo.png">
	<div class="nav">
		<span onclick="location.href='/'" class="zerytButtonFlat">Home</span>
		<span onclick="location.href='/about.php'" class="zerytButtonFlat">About</span>
		<span onclick="location.href='/thoughtStream.php'"class="zerytButtonFlat">Thought Stream</span>
		<!--*yawn* lazy padding is lazy-->
		<t> &#160;&#160; Zeryter: that one guy that does stuff on the internet</t>
	</div>
	<?php
	return $_SERVER["HTTP_USER_AGENT"];
	if ($userName != "null") {
		echo "
		<div class='loginInfo'>";
		echo $userName;
		echo "
		</div>
		";
	}
	?>
</body>