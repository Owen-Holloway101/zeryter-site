<?php
//Owen Holloway 2016
//@Zeryter
?>
<!--Love me some good jquery-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.form.js"></script> 

<!-- Compiled and minified CSS -->
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" media="screen,projection">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

<!--The Zeryt icon-->
<link rel="icon" href="/assets/zeryt.ico" type="image/ico" sizes="16x16">

<!--Meterial Icons-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--We use UTF-8 here-->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php
function isMobile() {
	require_once $_SERVER['DOCUMENT_ROOT'].'/core/mobile-detect/Mobile_Detect.php';
	$detect = new Mobile_Detect;
	if ($detect->isMobile()) {
		return true;
	} else  {
		return false;
	}
}
?>