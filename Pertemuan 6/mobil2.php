<?php 
class Mobil{
	private $jumlahRoda;
	public function setJumlahRoda($jumlahRoda){
		$this->jumlahRoda = $jumlahRoda;
	}
	public function getJumlahRoda(){
		return $this->jumlahRoda;
	}
}

$mobil = new Mobil();
$mobil->setJumlahRoda(4);
$mobil2 = new Mobil();
$mobil2->setJumlahRoda(7);
echo $mobil->getJumlahRoda();
echo "<br>";
echo $mobil2->getJumlahRoda();
?>