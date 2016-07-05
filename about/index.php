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
	
</body>
<?php
	include $_SERVER["DOCUMENT_ROOT"]."/core/footer.php";
?>
</body>