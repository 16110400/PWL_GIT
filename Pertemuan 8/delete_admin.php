<?php 
require_once("koneksi/koneksi.php");
?>

<?php
if($_GET['id_admin'] != "")
{
$query = "DELETE FROM admin where id_admin='".$_GET['id_admin']."'";
$hasil = mysqli_query($con, $query) or die (mysqli_error($con));
}
?>

<script>
  	alert("data telah dihapus");
  	window.location = 'dataadmin.php';
</script>