<?php
require 'nav.php';
?>

<html>

<head>
	<title>Thought Stream - Zeryter.tk</title>
</head>

<body>
	<div class="sidebar">
		<span class="zerytButtonFlat" style="width: calc(100% - 20px); line-height: 20px; display: inline-block;" onclick="location.href=''">/placeholder/</span><br>
		<span class="zerytButtonFlat" style="width: calc(100% - 20px); line-height: 20px; display: inline-block;" onclick="location.href=''">/placeholder/</span><br>
	</div>
	<?php
	if ($userPermission >= 90) {
		echo '
		<div class="content">
			<textarea class="zerytTextArea" name="postText"></textarea>
		</div>
		';
	}
	?>
</body>

</html>