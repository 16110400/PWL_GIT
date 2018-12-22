<?php 
require_once("koneksi/koneksi.php");
 ?>

<h2>Tabel Kategori</h2>
<table border="1">
	<tr>
		<td>kd.kategori</td>
		<td>nama</td>
	</tr>
<?php  
//perulangan
$query = mysqli_query($con,"SELECT * FROM kategori");
while($record = mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $record["id_kategori"]; ?></td>
		<td><?php echo $record["nama_kategori"]; ?></td>
	</tr>
<?php 
}
?>
</table>
