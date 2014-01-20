<?php
echo $_COOKIE["user"];
echo "<br>";
$pass = $_COOKIE["pass"];
echo $pass;
echo "<br>";

/*
$options = array('cost' => 11);
$passHash = password_hash($pass, PASSWORD_BCRYPT, $options);
echo $passHash."\n";
echo "<br>";

if (password_verify($pass, $passHash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
*/
?>