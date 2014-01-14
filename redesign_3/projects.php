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
	<script>
	function pageSelect(page) {
		window.location.href = 'projects.php?page=' + page;
	}
	</script>
</head>

<body class="preload">

	<?php
	include("nav.html");
	?>

	<div id="wrapper">
	<?php
	post("Welcome to the project page!");
	?>
	<div style="padding-top: 15px; padding-bottom: 15px;background: #2E3436;" id="content">
	<betterButton onclick="pageSelect('website')">Website</betterButton>
	<betterButton onclick="pageSelect('P2P-CHAT')">P2P-CHAT</betterButton>
	<betterButton onclick="pageSelect('LongText')">Long Text</betterButton>
	</div>
	<?php
	$page = $_GET['page'];
	if($page == 'website'){
	include("projects/website.php");
	} else if($page == 'P2P-CHAT') {
	include("projects/P2P-CHAT.php");
	} else if($page == 'LongText') {
	include("projects/longText.php");
	} else {
	post("<p>Select a project by pressing on one of these snazzy buttons</p>");
	}
	?>
	
</body>

<script>
$("window").load(function() {
  $("body").removeClass("preload");
});
</script>

</html>
