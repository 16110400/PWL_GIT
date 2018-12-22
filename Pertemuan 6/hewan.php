<?php
class hewan{
	private $gerak;
	private $nafas;

	public function setGerak($gerak){
		$this->gerak = $gerak;
	}

	public function setNafas($nafas){
		$this->nafas = $nafas;
	}

	public function getGerak(){
		return $this->gerak;
	}
	public function getNafas(){
		return $this->nafas;
	}

	public function cetak ($hewan){
		echo $hewan." bernafas dengan ".$this->getNafas()." dan bergerak dengan ".$this->getGerak();
	}
}

$gajah = new hewan();
$gajah-> setGerak("4 kaki");
$gajah-> setNafas("1 belalai");
$gajah-> cetak("Gajah");
?>