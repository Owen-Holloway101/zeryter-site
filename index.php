<?php
//Internet explorer 10 and below are broken
if(preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT']))
{
	header("Location: /core/iepage.html");
	die();
}
?>
<head>
<title>@Zeryter - Home</title>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/core/styles.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/core/nav.php";
?>
</head>
<body>
    <div class="row">
        <div class="col m8 offset-m2">
            <div class="card-panel">
            Hey there, I am @Zeryter (better know as Owen) I'm and engineering student with a keen sense for design 
            and a passion for just about anything nerdy.</br>
            </br>
            Welcome to my home on the internet.</br>
            </br>
            The photo on the background was one I took during a visit to one of the Hydroelectric dams in my state of Tasmanaia.
            </div>
        </div>
    </div>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/core/footer.php";
?>
</body>