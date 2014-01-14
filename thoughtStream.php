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
	<script>
	</script>
</head>

<body>
	<?php
	include("nav.html");
	?>
	
	<div id="post">
		<t>This is the Zeryter thought stream (aka a blog fools) .... its also currently in dev</t>
	</div>
	<div id="post">
		<textarea id="betterTextArea" name="postText"></textarea>
		<button onclick=pageSelect('website') class=zerytButton style="margin-left: 10px; padding-left: 20px; padding-right: 20px;">Post</button>
	</div>


</body>

</html>