<?php 
$arrMhs = array('Lia' => 60 ,'Fahmi' => 89, 'dona' => 80, 'Fiona' => 90, 'Joni' => 79, 'Marni' => 95, 'jojo' => 100,'Robbi' => 60 );

echo "<pre>";
print_r($arrMhs);

$status;
$rata = 0;

for($i=0;$i<count($arrMhs);$i++){
	$rata = $rata+current($arrMhs);
	next($arrMhs);
}

$rata = $rata/count($arrMhs);

reset($arrMhs);
echo "Rata-rata nilai ujian : 81.625 <br><br>";
for($i=0;$i<count($arrMhs);$i++){
	if (current($arrMhs) < $rata) {
		$status = "Dibawah rata-rata";
		}
		else {
		$status = "Diatas rata-rata";
		}

echo "Nilai ".key($arrMhs)." = ".current($arrMhs)." , ".$status." <br>";
next($arrMhs);
}


 ?>