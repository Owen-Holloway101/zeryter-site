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
			echo "<h3>Info for mods:</h3>";
			echo "<li>Server login: minecraft@zeryter.tk (port 22), the password is: ".$minecraftPass."</li>";
			echo "<li>'screen -x' will bring up the minecraft console, <u>do not</u> change config files without stopping the server first.</li>";
			echo "<li>To bring the server back up run 'screen -d -m ./minecraftCommand <- WIP'";
		} else {
			echo "You really shouldn't be here ....";
		}
	?>
</div>

<?php
if ($userPermission >= 60) {
	echo 
	"<div class=\"content\">
	<h3>shutdown procedure</h3>
	<li>login to server over ssh (putty)</li>
	<li>wait for \"minecraft@zeryter.tk:~$\" to display</li>
	<li>type in \"sudo shutdown -h now\"</li>
	<li>press enter</li>
	<li>type in the minecraft user password again and press enter</li>
	<br>
	The server is now powering down, please be aware of other users when you execute this command.
	</div>";
}
?>

</body>