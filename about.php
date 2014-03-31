<?php
require 'nav.php';
include $_SERVER['DOCUMENT_ROOT'].'/passwords.private';
?>
<html>

<head>
	<title>About - Zeryter.tk</title>
</head>

<body>
	<div class="sidebar">
		<span class="zerytButtonFlat" style="width: calc(100% - 20px); line-height: 20px; display: inline-block;" onclick="location.href='https://plus.google.com/+OwenHolloway'">Google+</span><br>
		<span class="zerytButtonFlat" style="width: calc(100% - 20px); line-height: 20px; display: inline-block;" onclick="location.href='https://github.com/owen-holloway101'">GitHub</span><br>
	</div>
	<div class="content">
		<h3>True Facts About This Website</h3>
		<li><strike>It is hosted on a 2g MC model iPod touch jailbroken with greenposi0n!</strike></li>
		<li>It is now hosted on a GT-i9000 Samsung smartphone. The server package is KSWEB and its CyanogenMod 10.2 (official)</li>
		<li>It uses php javascript and css that is all self taught</li>
		<li>I made it because procrastnation .....</li>
		<br>
	</div>

	<div class="content">
		<h3>Services also hosted on this address</h3>
		<li>Mumble server is no longer under development, if you want it up talk to one of the mods.</li>
		<li>Minecraft server (under development) [very very WIP]</li>
		<?php
		if ($userPermission >= 60) {
			echo "<br><br>Info for mods:";
			echo "<li>Server login: minecraft@zeryter.tk (port 22), the password is:".$minecraftPass."</li>";
		}
		?>
		<br>
	</div>

	<div class="content">
		<h3>A shiny new server!</h3>
		<br>
		<t>I have a new server for this site! Its a Samsung GT-i9000 (aka a Samsung Galaxy S I) it served me well as a phone for a good 2 years but it can longer take calls so I have moved it on to a new purpose. As for the old server (iPod touch 2g MC) its back in the box and powered off. This new server was also a pain in the arse to get going ....</t>
	</div>

</body>

</html>
