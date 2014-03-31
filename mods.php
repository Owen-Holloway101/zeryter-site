<?php
require 'nav.php';
require 'passwords.private';
?>

<head>
	<title>The MODS page - zeryter.tk</title>
</head>

<body>
	
<div class="sidebar">
		<span class="zerytButtonFlat" style="width: calc(100% - 20px); line-height: 20px; display: inline-block;" onclick="location.href='https://plus.google.com/+OwenHolloway'">Google+</span><br>
		<span class="zerytButtonFlat" style="width: calc(100% - 20px); line-height: 20px; display: inline-block;" onclick="location.href='https://github.com/owen-holloway101'">GitHub</span><br>
		<?php
		if ($userPermission >= 60) {
			echo "<span class=\"zerytButtonFlat\" style=\"width: calc(100% - 20px); line-height: 20px; display: inline-block;\" onclick=\"location.href='/wol.php'\">WOL</span><br>";
		}
	?>
</div>

<div class="content">
	<?php
		if ($userPermission >= 60) {
			echo "<br><br>Info for mods:";
			echo "<li>Server login: minecraft@zeryter.tk (port 22), the password is: ".$minecraftPass."</li>";
			echo "<li>'screen -x' will bring up the minecraft console, <u>do not</u> change config files without stopping the server first.</li>";
			echo "<li>To bring the server back up run 'screen -d -m ./minecraftCommand <- WIP'";
		} else {
			echo "You really shouldn't be here ....";
		}
	?>
</div>

</body>