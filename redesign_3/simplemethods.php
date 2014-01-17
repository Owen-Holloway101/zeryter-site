<!-- Owen Holloway 2013 zerytsoft-->
<?php

function post($content) {

	echo '<div id="content">';

	echo '<p>'.$content.'</p>';

	echo '</div>';

}

function headedpost($heading,$content) {

	echo '<div id="content">';

	echo "<h3>".$heading."</h3>";

	echo '<p>'.$content.'</p>';

	echo '</div>';

}

?>
