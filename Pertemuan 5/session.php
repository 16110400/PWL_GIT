<?php
session_start();
$_SESSION["user"]=$_POST["username"];
$_SESSION["pass"]=$_POST["password"];

echo "Session telah di tambahkan..<br>";
echo $_SESSION["user"]."<br>".$_SESSION["pass"];

echo "<br><br>";

$userreal = "adminasli";
$passreal = "123";

if (($_SESSION["user"]==$userreal) && ($_SESSION["pass"]==$passreal)) {
	echo "Betul anda adalah admin asli min...";
	header('Location: main.php');
} else {
	echo "Intruder! Get out from here!";
	//header('Location: formLogin.php');
}


?>

<script type="text/javascript">
	alert('Login Gagal Mas bro!')
	window.location='formLogin.php';
</script>