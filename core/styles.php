<?php
//Owen Holloway 2016
//@Zeryter
?>
<!--Love me some good jquery-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script async type="text/javascript" src="http://malsup.github.com/jquery.form.js"></script> 

<link rel="stylesheet" type="text/css" href="/core/frontend/global.css"/>


<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

<!--Text Editor-->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!--Meterial Icons-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--We use UTF-8 here-->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php
function isMobile() {
    require_once $_SERVER['DOCUMENT_ROOT'].'/core/mobile-detect.php';
    $detect = new Mobile_Detect;
    if ($detect->isMobile()) {
        return true;
    } else  {
        return false;
    }
}
	
if (isMobile()) {
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/core/mobile.css\"/>";
} else {
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/core/desktop.css\"/>";
}

?>
<script type="text/javascript">
//Enable parallax
$(document).ready(function(){
    $('.parallax').parallax();
    $('select').material_select();
});
</script>