<?php
//Internet explorer 10 and below are broken
if(preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT']))
{
	header("Location: /core/iepage.html");
	die();
}

if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}

require_once $_SERVER['DOCUMENT_ROOT']."/core/session.php";

?>
<head>
<title>@Zeryter - Home</title>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/core/styles.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/core/nav.php";
?>
</head>
<main>
    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2">
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
</main>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/core/footer.php";
?>