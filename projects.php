<?php
if ( preg_match("/MSIE/",$_SERVER['HTTP_USER_AGENT']) ) {
        header("Location: iepage.html");
	die();
}
?>
<!-- Owen Holloway 2013 ZerytSoft -->
<html>

<head>
	<title>Zeryter - Home</title>
	<link rel="shortcut icon" href="assets/icon.ico">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	function pageSelect(page) {
		console.log("pageSelect");
		window.location.href = 'projects.php?page=' + page;
	}
	</script>
</head>

<body>
	<?php
	include("nav.html");
	?>

	<div id="post">
		<button onclick=pageSelect('website') class=zerytButton>Website</button>
		<button onclick=pageSelect('P2P-CHAT') class=zerytButton>P2P-CHAT</button>
		<button onclick=pageSelect('LongText') class=zerytButton>LongText (site testing)</button>
	</div>

	<?php
	$page = $_GET['page'];
	if($page == 'website'){
		include("projects/website.post");
	} else if($page == 'P2P-CHAT') {
		include("projects/P2P-CHAT.post");
	} else if($page == 'LongText') {
		include("projects/longText.post");
	} else {
		post("<p>Select a project by pressing on one of these snazzy buttons</p>");
	}
	?>

</body>

<html>
