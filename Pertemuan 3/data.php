<?php
if (isset($_POST["simpan"])) {
	echo $_POST["nama"]."<br>Ini klik simpan data";
} else {
	echo "Ini klik tampil data";
}
?>
<br>
<?php
echo "Nama anda : ".$_POST["nama"];
?>
<br>
<?php
echo "Pass anda : ".$_POST["password"];
?>
<br>
<?php
if (isset($_POST["simpan"])) {
	echo "Anda adalah ".$_POST["gender"];
} else {
	echo "Anda adalah ".$_POST["gender"];
}
?>

<br>
<pre>
<?php
print_r($_POST);
?>
</pre>