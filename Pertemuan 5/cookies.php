<?php
$user = "admin";
$pass = "123";
setcookie("user",$user,time() +3600);
setcookie("pass",$pass,time() +10);

echo "Cookies telah di tambahkan";
?>