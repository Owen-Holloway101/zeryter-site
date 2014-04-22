<html>
<head>
	<link rel="stylesheet" type="text/css" href="/csstest/mainStyles.css">
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 800px)" href="/csstest/mobileStyles.css" />
</head>

<body>
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
