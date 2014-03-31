<?php
require 'nav.php';

function displayPosts() {

	require $_SERVER["DOCUMENT_ROOT"].'/passwords.private';
	$db = new mysqli('127.0.0.1','root',$sqlPass,'POST');

	$posts = array();
	$posts = null;

	$query = "SELECT POSTNO,POSTDATA FROM thoughtStream";

	if ($stmt = $db->prepare($query)) {

		/* execute statement */
		$stmt->execute();

		/* bind result variables */
		$stmt->bind_result($postNo,$postData);

		/* fetch values */
		while ($stmt->fetch()) {
			 $posts[$postNo] = $postData;
		}
	}
	//the sizeof($posts) + int, int is due to some posts being deleted in the first few posts so it does not start at 0 and got through to x uniformly 
	for ($i=sizeof($posts) + 100; $i > -1; $i--) { 
			if (!$posts[$i] == null) {
			echo "<div class='content'>";
			echo $posts[$i];
			echo "</div>";
		}
	}
}

?>

<html>

<head>
	<title>Thought Stream - Zeryter.tk</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	function post () {
		var postText = $("textarea#postText").val();
		postText = postText.replace(/\r?\n/g, "<br/>");
		console.log(postText);
		var postLocation = "thoughtStream";
		console.log(postLocation);
		var expDate = new Date();
		expDate.setTime(expDate.getTime()+(60*15)); //set to an 1/4 hour from Now
		document.cookie="postText=" + postText + ";" + expDate;
		document.cookie="postLocation=" + postLocation + ";" + expDate;
		window.location.href="post.php";
	}
	</script>
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
	<?php
	if ($userPermission >= 90) {
		echo '
		<div class="content">
			<textarea class="zerytTextArea" name="postText" id="postText"></textarea>
			<span class="zerytButtonFlat" style="width: calc(100% - 14px); line-height: 20px; display: inline-block;" onclick="post();">POST</span>
		</div>
		';
	}
	displayPosts();
	?>
</body>

</html>