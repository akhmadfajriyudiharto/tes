<?php
require_once('mobil.php');
Class miniMobil implements Mobil{
	private $jumlahRoda;

	public function setJumlahRoda($jumlah){
		$this->jumlahRoda = $jumlah;
	}

	public function getJumlahRoda(){
		return $this->jumlahRoda;
	}
}
?>