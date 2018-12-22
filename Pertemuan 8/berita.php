<?php	
require_once("koneksi/koneksi.php");
?>

<h2>Tabel Berita</h2>
<table border="1">
	<tr>
		<td>id.berita</td>
		<td>kd.kategori</td>
		<td>nama</td>
		<td>judul</td>
		<td>isi</td>
		<td>tanggal</td>

	</tr>
<?php  
//perulangan
$query = mysqli_query($con,"SELECT * FROM kategori INNER JOIN berita ON kategori.id_kategori = berita.id_kategori");
while($record = mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $record["id_berita"]; ?></td>
		<td><?php echo $record["id_kategori"]; ?></td>
		<td><?php echo $record["nama_kategori"]; ?></td>
		<td><?php echo $record["judul_berita"]; ?></td>
		<td><?php echo $record["isi_berita"]; ?></td>
		<td><?php echo $record["tanggal_berita"]; ?></td>
	</tr>
<?php 
}
?>
</table>