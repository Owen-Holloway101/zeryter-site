<html>
<head>
	<link rel="stylesheet" type="text/css" href="/csstest/mainStyles.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 800px)" href="/csstest/mobileStyles.css" /> <!--This line will dynamic change on desktop version-->
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 800px)" href="/csstest/mobileStyles.css" />
	<script type="text/javascript">
		console.log("Hello");
		function test (arg) {
			console.log("Hello" + arg);
		}
	</script>
</head>

<body>
	<div class="nav">
	<div class="overflow">
	</div>
	Header Text
	</div>
	<?php
	for ($i=0; $i < 100; $i++) { 
		echo "
		<div class=\"content\">
			This is some test text
		</div>
		";
	}
	?>
</body>

</html>
