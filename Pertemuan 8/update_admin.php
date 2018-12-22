<?php 
require_once("koneksi/koneksi.php");
?>

<?php
$query = mysqli_query($con,"SELECT * FROM admin where id_admin='".$_GET['id_admin']."'");
while ($record = mysqli_fetch_array($query)) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Update Admin</h2>
 <form action="" method="POST">
 	<table  width="200">
 		<tr>
 			<td>No.ID</td>
 			<td><input type="text" name="id" value="<?php echo $record["id_admin"]; ?>"></td>
 		</tr>
 		<tr>
 			<td>Username</td>
 			<td><input type="text" name="username" value="<?php echo $record["username"]; ?>"></td>
 		</tr>
 		<tr>
 			<td>Password</td>
 			<td><input type="password" name="password" value="<?php echo $record["password"];?>"></td>
 		</tr>
 		<tr align="right">
 			<td colspan="2"><input type="submit" name="update" value="Update"></td>
 		</tr>
 	</table>
 </form>
</body>
</html>


<?php 
if(isset($_POST['update'])){
	$query2 = "UPDATE admin SET username = '".$_POST['username']."', password = '".$_POST['password']."' WHERE id_admin = '".$_POST['id']."';";
	$hasil = mysqli_query($con, $query2) or die (mysqli_error($con)); 

 ?>
<script>
  	alert("data telah diupdate");
  	window.location = 'dataadmin.php';
</script>
<?php } ?>
<?php }?>

