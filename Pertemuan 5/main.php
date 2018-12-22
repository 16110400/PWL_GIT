<?php 
session_start();
if (isset($_SESSION['user'])) {
?>

<?php 
echo "Selamat datang!";
?>
<a href="logout.php">log out</a>

<?php 
}

else{
 ?>

 <script type="text/javascript">
	alert('Login Gagal Mas bro!')
	window.location='formLogin.php';
</script>

<?php 
}
 ?>


