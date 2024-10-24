<?php
class Barang {
     
     public $idBarang;
     public $namaBarang ;
     public $jenisBarang ;
     public $tanggalPemesanan;
     public $expired;
     public $stok ;
     public $pembelian ;

//Constructor untuk inisialisasi properties/atribut
    public function __construct($idBarang = 0,$namaBarang = '',$jenisBarang ='',$tanggalPemesanan = '',$hargaBarang = 0,$stok = 0,$pembelian = 0 ){
        $this->idBarang = $idBarang;
        $this->namaBarang = $namaBarang;
        $this->jenisBarang = $jenisBarang;
        $this->tanggalPemesanan = $tanggalPemesanan;
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
        $this->pembelian = $pembelian;
}

public function stokAkhirBarang(){
    //menghitung hasil akhir stok
        $this->stok = ($this->stok - $this->pembelian);
        return $this->stok;
    }
}
//inisialisasi variabel untuk perhitungan stok
$Stokakhir = null;

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    //Membentuk intance /objek baru dari class Barang
    $panggilBarang = new Barang();
    $panggilBarang->stok = intval($_POST['stok']);
    $panggilBarang->idBarang = intval($_POST['idBarang']);
    $panggilBarang->namaBarang = $_POST['NamaBarang'];
    $panggilBarang->jenisBarang = $_POST['JenisBarang'];
    $panggilBarang->tanggalPemesanan = $_POST['tanggalpemesanan'];
    $panggilBarang->hargaBarang = $_POST['hargaBarang'];
    $panggilBarang->pembelian = intval($_POST['pembelian']);

    //perhitungan akhir sebuah Barang
    $idBarang = $panggilBarang->idBarang;
    $namaBarang = $panggilBarang->namaBarang;
    $jenisBarang = $panggilBarang->jenisBarang;
    $tanggalPemesanan = $panggilBarang->tanggalPemesanan;
    $hargaBarang = $panggilBarang->hargaBarang;
    $Stokakhir = $panggilBarang->stokAkhirBarang();
}
?>