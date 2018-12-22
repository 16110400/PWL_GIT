<?php 
//class
class Mobil{
	//properti
	private $jumlahRoda;
	private $jumlahKursi;

	public function setJumlahRoda($jumlahRoda){
		$this->jumlahRoda = $jumlahRoda;
	}
	//Method
	public function setJumlahKursi($jumlahKursi){
		$this->jumlahKursi=$jumlahKursi;
	}

	//Method
	public function cetak($mobil)
	{
		echo $mobil.' punya '.$this->jumlahRoda.' roda dan '.$this->jumlahKursi.' kursi';
	}
}

$sedan = new Mobil(); //Object
$sedan->setJumlahRoda(4);
$sedan->setJumlahKursi(4);
$sedan->cetak('Lamborgini');
echo "<br>";
$bajaj  = new Mobil();
$bajaj->setJumlahRoda(3);
$bajaj->setJumlahKursi(4);
$bajaj->cetak('Bajaj');

?>
