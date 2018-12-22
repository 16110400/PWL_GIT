<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan ke 2 PHP</title>
</head>
<body>
<h1>Hello World!</h1>
<?php

/*
Comment 
Multi
Baris
*/
	//Embedded Script
	echo "My name is PHP, Nice to meet you :D <br/>";
	//Non Embedded Script
	$a = "<p>Best way to learn Coding PHP</p>";
	$kampus = "AMIKOM Yogyakarta";
	echo $a;
	echo "My Campus is : ".$kampus;
	//Konstanta
	echo "<br/>";
	 define("KAMPUS", "STMIK AMIKOM YOGYAKARTA");
	 define("SLOGAN", "TEMPAT KULIAH ORANG BERDASI <br/>");
 	 print "KAMPUS : ".KAMPUS;
 	 echo "<br>SLOGAN : ".SLOGAN; 

 	 define("phi", 3.14);
 	 $r = 100;
 	 $hasil = phi*$r*$r*0.5 ;
 	 echo "Hasil luas lingkaran : $hasil cm²";



?>
</body>
</html>