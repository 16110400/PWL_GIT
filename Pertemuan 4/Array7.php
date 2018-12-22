<?php
$arrNilai = array ("Lia" => 80, "Fitra" => 90,
"Nova" => 75,
"Reza" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan
asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan
arsort()</b>";
echo "<pre>"; 
print_r($arrNilai);
 echo "</pre>";
?>