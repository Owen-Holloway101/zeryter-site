<html>
<head>
	<link rel="stylesheet" type="text/css" href="/csstest/mainStyles.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 800px)" href="/csstest/mobileStyles.css" /> <!--This line will dynamic change on desktop version-->
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 800px)" href="/csstest/mobileStyles.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript">
		console.log("Hello");
		function test (arg) {
			console.log("Hello" + arg);
		}

		function animate() {
			$(".nav").toggleClass("navActive");
			console.log('activate nav');
		}
	</script>
</head>

<body>
	<div class="headerBar">
		<div onclick="animate();" class="overflow">
		<img src="/csstest/images/overflow.png" style="width: 100%; height: 100%;">
		</div>
		Header Text
	</div>
	
	<div class="nav">
		
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
