<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$Buah = array ("Melon", "Alpukat", "Durian",
"Apel");
echo $Buah[1]; //Alpukat
echo "<br>";
echo $Buah[3]; //Apel

$Warna = array();
$Warna[] = "Hijau";
$Warna[] = "Biru";
$Warna[] = "Merah";
$Warna[] = "Kuning";

for ($i=1;$i<5;$i++){
	$huruf[] = "mhs".$i;
	}

$arrMhs = array('mhs1' => array('nim' => 123,'nama' => "dikot", 'kelas' => "IF06" ) ,'mhs2' => array('nim' => 124,'nama' => "haris", 'kelas' => "IF06" ) );

echo "<pre>"; //Membuat teks dengan ukuran huruf yang sama
echo "<br>";
echo $Warna[0]; //Hijau
echo "<br>";
echo $Warna[2]; //Merah
echo "<br>";
print_r($Warna);
echo "<br>";
print_r($Buah);
echo "<br>";
print_r($huruf);
echo "<br>";
print_r($arrMhs);

?> 
<table border="1px">
<tr>
	<th>no</th>
	<th>nim</th>
	<th>nama</th>
	<th>kelas</th>
</tr>

<?php
$no = 1;
foreach ($arrMhs as $key => $value) {
echo "<tr>";
echo "<td>".$no."</td>";
echo "<td>".$value['nim']."</td>";
echo "<td>".$value['nama']."</td>";
echo "<td>".$value['kelas']."</td>";
echo "</tr>";
$no++;
}
 ?>

 <?php
for ($i=0; $i < 10; $i++) { 
	$index[]= $i;
}

print_r($index);
foreach ($index as $key => $value) {
	if ($key%2 == 0){
		echo "<br>";
		echo $value;
	}
}

  ?>

</table>

</body>
</html>