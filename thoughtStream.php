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
	<script type="text/javascript">
		function newPost() {
			console.log("New Post");
			var text = $('textarea#betterTextArea').val();
			console.log(text);
		}
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
		<button onclick=newPost(); class=zerytButton style="margin-left: 10px; padding-left: 20px; padding-right: 20px;">Post</button>
	</div>
</body>

</html>