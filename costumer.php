<?php
class Costumer {
     
     public $idCostumer;
     public $namaCostumer ;
     public $alamatCostumer;
     public $nomerHp;
     public $jenisKelamin;
     public $gmailCostumer;
     public $totalPesanan;

//Constructor untuk inisialisasi properties/atribut
public function __construct($idCostumer = 0,$namaCostumer = '',$alamatCostumer = '',$nomerHp = 0,$jenisKelamin = '',$gmailCostumer = '',$totalPesanan = 0){
     $this->idCostumer = $idCostumer;
     $this->namaCostumer = $namaCostumer;
     $this->alamatCostumer = $alamatCostumer;
     $this->nomerHp = $nomerHp;
     $this->jenisKelamin = $jenisKelamin;
     $this->gmailCostumer = $gmailCostumer;
     $this->totalPesanan = $totalPesanan;

}

}
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     //Membentuk intance /objek baru dari class Costumer
     $panggilCostumer = new Costumer();
     $panggilCostumer->idCostumer = intval($_POST['idCostumer']);
     $panggilCostumer->namaCostumer = $_POST['namaCostumer'];
     $panggilCostumer->alamatCostumer = $_POST['alamatCostumer'];
     $panggilCostumer->nomerHp = intval ( $_POST['nomerHp']);
     $panggilCostumer->jenisKelamin = $_POST['jenisKelamin'];
     $panggilCostumer->gmailCostumer = $_POST['gmailCostumer'];
     $panggilCostumer->totalPesanan =intval ( $_POST['totalPesanan']);
     
     //perhitungan akhir sebuah Costumer
     $idCostumer = $panggilCostumer->idCostumer;
     $namaCostumer = $panggilCostumer->namaCostumer;
     $alamatCostumer = $panggilCostumer->alamatCostumer;
     $nomerHp = $panggilCostumer->nomerHp;
     $jenisKelamin = $panggilCostumer->jenisKelamin;
     $gmailCostumer = $panggilCostumer->gmailCostumer;
     $totalPesanan = $panggilCostumer->totalPesanan;
 }
 ?>