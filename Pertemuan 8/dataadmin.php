<?php 
require_once("koneksi/koneksi.php");
 ?>

<h2>Tabel Admin</h2>
<table border="1">
	<tr>
		<td>id</td>
		<td>user</td>
		<td>pass</td>
		<td>aksi</td>
	</tr>
<?php  
//perulangan
$query = mysqli_query($con,"SELECT * FROM admin");
while($record = mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $record["id_admin"]; ?></td>
		<td><?php echo $record["username"]; ?></td>
		<td><?php echo $record["password"]; ?></td>
		<td>
		<a href="update_admin.php?id_admin= <?php echo $record["id_admin"]; ?>">Update </a>
		<a href="delete_admin.php?id_admin= <?php echo $record["id_admin"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"> Delete</a></td>
	</tr>
<?php 
}
?>
<tr>
	<td colspan="4"><button><a href="tambah_admin.php">Tambah</a></button></td>
</tr>
</table>

<h2>Tabel Kategori</h2>
<table border="1">
	<tr>
		<td>kd.kategori</td>
		<td>nama</td>
		<td>aksi</td>
	</tr>
<?php  
//perulangan
$query = mysqli_query($con,"SELECT * FROM kategori");
while($record = mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $record["id_kategori"]; ?></td>
		<td><?php echo $record["nama_kategori"]; ?></td>
		<td><a href="update_admin.php?id_admin= <?php echo $record["id_admin"]; ?>">Update </a>
		<a href="delete_admin.php?id_admin= <?php echo $record["id_admin"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"> Delete</a></td>
	</tr>
<?php 
}
?>
<tr>
	<td colspan="4"><button><a href="tambah_kategori.php">Tambah</a></button></td>
</tr>
</table>
