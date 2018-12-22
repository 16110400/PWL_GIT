<?php 
require_once("koneksi/koneksi.php");
 ?>

 <h2>Tambah Admin</h2>
 <form action="" method="POST">
 	<table  width="200">
 		<tr>
 			<td>Username</td>
 			<td><input type="text" name="username"></td>
 		</tr>
 		<tr>
 			<td>Password</td>
 			<td><input type="password" name="password" id="password"></td>
 		</tr>
 		<tr align="right">
 			<td colspan="2"><input type="submit" name="submit" value="Daftar"></td>
 		</tr>
 	</table>
 </form>

 <?php 
	if(isset($_POST['submit'])){
	$query = "INSERT INTO admin (id_admin, username, password) VALUES ('', '".$_POST['username']."', '".$_POST['password']."')";
	echo $query;
	$hasil = mysqli_query($con, $query) or die (mysqli_error());
  ?>
  
  <script>
  	alert("data sukses ditambahkan");
  	window.location = 'dataadmin.php';
  </script>

<?php 
	}
?>
