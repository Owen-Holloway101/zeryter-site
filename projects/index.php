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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ultricies turpis. Vestibulum at tempus purus, ac placerat libero. Fusce vehicula ullamcorper orci quis convallis. Vivamus fermentum tempus nunc, quis viverra diam pharetra sit amet. Cras ultrices ac est ac tincidunt. Nunc eu eros vel sapien aliquet dignissim imperdiet sit amet metus. Sed non blandit sem. Morbi at urna at nunc suscipit vestibulum non quis augue. Phasellus pellentesque porttitor tellus. Nulla id lorem risus. Quisque ornare magna ac ullamcorper eleifend. Phasellus et mauris faucibus, pulvinar ante quis, aliquet massa. Vivamus vitae convallis eros, vitae eleifend orci.
            <br>
            Sed malesuada libero et libero faucibus consectetur. Maecenas elit tortor, ornare maximus vehicula vel, dignissim et tellus. Maecenas condimentum vestibulum varius. Duis nec ultricies massa, vitae rhoncus risus. Pellentesque eu ante id nunc fermentum molestie in at leo. Morbi laoreet sit amet erat quis suscipit. Mauris pulvinar suscipit arcu pulvinar vehicula. Mauris porttitor non dui et hendrerit. In ultricies purus eget dolor venenatis rhoncus et ut quam. Cras sit amet leo eu tellus bibendum maximus vitae in ante. Mauris aliquam, erat et dignissim interdum, ipsum velit volutpat neque, nec bibendum ex mi mattis lorem. Sed iaculis est risus, a feugiat lacus tincidunt congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ipsum ac augue pulvinar, et condimentum dui finibus.
            <br>
            Maecenas vestibulum enim quis dapibus varius. Praesent tincidunt semper maximus. Etiam vehicula augue quis ullamcorper porta. Sed mattis, nisl et rutrum efficitur, est massa tempus eros, a posuere eros leo vitae dui. Phasellus facilisis sodales urna, in iaculis dui aliquet non. Quisque quis sapien sit amet augue sagittis viverra eget ac orci. Sed pulvinar ut magna sit amet vestibulum. Vivamus velit ligula, congue non volutpat id, imperdiet ac nunc. Aliquam sed dui blandit, rhoncus eros id, laoreet orci. Curabitur et dui vestibulum, dapibus diam non, venenatis arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque malesuada dolor nec orci iaculis, quis semper tellus consectetur. Nullam blandit sem porttitor erat maximus luctus non quis nulla. Quisque congue dolor placerat turpis placerat, a malesuada nisi pulvinar. Phasellus molestie est eros, sit amet pretium mi pretium eget.
            <br>
            Nulla fringilla finibus sem. Nullam eget varius risus. Quisque mollis, enim convallis dignissim pellentesque, libero quam vestibulum erat, eget scelerisque ante augue nec turpis. Nam tempus, eros eget ornare iaculis, sapien massa vehicula mauris, nec molestie justo nibh non neque. Suspendisse suscipit efficitur eros, vitae maximus neque vulputate non. Vestibulum eleifend turpis eget lectus gravida, ac pellentesque lacus aliquet. Suspendisse vel nibh sed lacus tempor aliquet nec et lorem. Integer dolor tellus, elementum et lobortis vitae, vulputate sit amet risus. Donec elit ipsum, euismod eu blandit at, pellentesque et ante. Phasellus metus magna, varius id vulputate posuere, lacinia ac quam. Quisque tincidunt lorem at eros suscipit mattis. Nullam viverra, turpis sit amet mollis elementum, risus velit tincidunt nunc, vel lacinia lacus ex vel justo.
            <br>
            Fusce ac congue libero. Curabitur sit amet mi non mi ultrices condimentum. Ut consequat elementum ante ornare semper. Nullam et erat at tortor ornare gravida sit amet eu libero. Etiam eleifend auctor volutpat. Pellentesque ut eros hendrerit, tristique turpis faucibus, gravida urna. Mauris tristique, ante aliquam porta dictum, est nisi fermentum tortor, a finibus odio quam at neque. Donec commodo metus non placerat vulputate. Nulla bibendum felis odio, id fringilla quam accumsan quis. Maecenas vestibulum leo sit amet dui feugiat, a pretium ex luctus. Suspendisse potenti. Aliquam venenatis et quam sit amet ornare. Morbi id sapien sit amet nunc dictum rutrum. Quisque euismod lorem vel mi fringilla, ac facilisis arcu volutpat. Fusce luctus enim sit amet arcu scelerisque, id tincidunt massa posuere.
            </div>
        </div>
    </div>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/core/footer.php";
?>
</body>