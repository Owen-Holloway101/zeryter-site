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
        <div class="col s12 m8 offset-m2">
            <div class="card">
                <div class="card-content white-text">
                    <form class="col s12" action="/core/login.php" id="login" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" type="text" name="username" class="validate">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="passwordconfirm" type="password" name="passwordconfirm" class="validate">
                                <label for="passwordconfirm">Password Confirm</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/core/footer.php";
?>
</body>