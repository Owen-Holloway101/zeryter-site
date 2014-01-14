<!--This is the post funtion sheet-->
<?php

function appendToFile($stringToAppend,$filePath) {
	$file = fopen($filePath, "a");
	fwrite($file, $stringToAppend);
}

function newPost($postData,$postLocation) {
	appendToFile(post($postData),$postLocation);
}
?>