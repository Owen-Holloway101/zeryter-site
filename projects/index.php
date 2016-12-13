<?php
//Internet explorer 10 and below are broken
if(preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT']))
{
	header("Location: /core/iepage.html");
	die();
}

require_once $_SERVER['DOCUMENT_ROOT']."/core/session.php";

?>
<head>
<title>@Zeryter - Projects</title>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/core/styles.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/core/nav.php";
?>
</head>
<main>
    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2">
            <div class="card-panel">
			So thought I'd give you a quick look at the sort of stuff that I do with tech<br>
			A bit of bodging, a bit of coding, mostly messy<br>
			<br>
			<a href="http://welly.tasrovers.com">The Wellington Rover Crew website</a><br>
			The first real website I made and have been maintaining. It is based on materializecss framework and is a bit of a mess 
			on the backend of the code, but it is always being changed in parallel with this website. The are based on the same tech 
			and in some ways prototypes for each other. <br>
			<br>
			<a href="https://goo.gl/photos/Gk9GZDHUnTjfun6E8">Google Sheets Invoicing</a><br>
			This was born out of necissity, I became the treasurer of my Rover group and needed a solid easy and fast way to send and manage invoices that was also 
			free and easy to pass onto the next person to hold the role. This system is actually the second, there was an excel versio  that would send out a mail 
			merged word document but it became to clunky so I moved to this. It uses google apps scripting to automate invoice creation and sending. As people pay into 
			the invoice it can update them on how much they still owe. Yet to implement saving invoices as hard copies but for now emails work. It sends out a html formatted 
			email as the invoice. <br>
			<br>
			<a htref="https://github.com/Owen-Holloway101/InsidePlanetEarth">Inside Planet Earth</a><br>
			The circuitry and code for an art installation that was installed at Clarence High School. It was built to be easy to read for students 
			that were interested in the project. It had a hand made and etched PCB with easy to see components and was powered by an arduino. There 
			are a whole lot more things I would have liked to do with this project but it worked in the end. If you are interested in doing a similar 
			project get in touch!<br>
			<br>
			<a href="https://github.com/Owen-Holloway101/P2P-CHAT">P2P-Chat</a> & <a href="https://github.com/Owen-Holloway101/P2P-CHAT-ANDROID">P2P-Chat-Android</a><br>
			This started as a final year project for computer science in year 12 (2013) its mostly stagnant now, was a very simple application that
			send out a broadcast packet over port 1000 and had a very basic encryption built in. Idea was to make a fast chat client that teachers couldn't detect 
			very quickly lost its usefulness. Was quite fun for learning how to work with java and android. 
            </div>
        </div>
    </div>
</main>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/core/footer.php";
?>