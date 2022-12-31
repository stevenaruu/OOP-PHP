<?php

// ABSTRACT CLASS
// karena hewan begitu ambigu, dan tidak akan digunakan ketika initialisasi, maka perlu diganti dengan abstract class
// $hewan = new hewan(); -> hewan itu ambigu, lebih baik kita menggunakan inheritance nya
// karena sudah abstract class, maka penggunaan kode diatas tidak akan bisa digunakan lagi
abstract class hewan {

    private $nama, $ras, $warna, $asal, $jenisKelamin, $harga, $diskon = 0;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0){
        $this->nama = $nama;
        $this->ras = $ras;
        $this->warna = $warna;
        $this->asal = $asal;
        $this->jenisKelamin = $jenisKelamin;
        $this->harga = $harga;
    }

    public function setNama($nama){

        $this->nama = $nama;

    }

    public function getNama() {

        return $this->nama;

    }

    public function setRas($ras) {

        $this->ras = $ras;

    }

    public function getRas() {

        return $this->ras;

    }

    public function setWarna($warna) {

        $this->warna = $warna;

    }

    public function getWarna() {

        return $this->warna;

    }

    public function setAsal($asal) {

        $this->asal = $asal;

    }

    public function getAsal() {

        return $this->asal;

    }

    public function setJenisKelamin($jenisKelamin) {

        $this->jenisKelamin = $jenisKelamin;

    }

    public function getJenisKelamin() {

        return $this->jenisKelamin;

    }

    public function setHarga($harga) {

        $this->diskon = 0;
        $this->harga = $harga;

    }

    public function getHarga(){

        return $this->harga - ($this->harga * $this->diskon / 100);

    }

    public function setDiskon($diskon = 0) {
        
        $this->diskon = $diskon;

    }

    public function getDiskon() {

        return $this->diskon;

    }

    public function getLabel(){

        return "$this->nama, $this->ras";

    }

    // karena namanya sama dengan kelas turunannya, maka lebih baik dijadikan abstract
    abstract public function cetakInfo(); 
    
    public function cetak(){

        $str = "{$this->getLabel()} | Rp. {$this->harga}";
        return $str;

    }

}

class anjing extends hewan {

    public $kg;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $kg = 0){
        
        parent::__construct($nama, $ras, $warna, $asal, $jenisKelamin, $harga);

        $this->kg = $kg;

    }

    public function cetakInfo(){

        // jadi tidak perlu seperti ini lagi
        // $str = "Anjing: " . parent::cetakInfo() . " - {$this->kg} Kilogram";

        $str = "Anjing: " . $this->cetak() . " - {$this->kg} Kilogram";
        return $str;

    }

}

class kucing extends hewan {

    public $hg;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $hg = 0){
        
        parent::__construct($nama, $ras, $warna, $asal, $jenisKelamin, $harga);

        $this->hg = $hg;

    }

    public function cetakInfo(){

        $str = "Kucing: " . $this->cetak() . " - {$this->hg} Hektogram";
        return $str;

    }

}

// membuat class baru
class cetakHewan {

    // membuat array, untuk nanti semuanya akan di simpan dalam array 2d
    public $daftarHewan = [];

    // membuat function, agar hewan-hewannya tersimpan dalam array
    public function tambahHewan(hewan $hewan) {

        $this->daftarHewan[] = $hewan;

    }

    public function printHewan() {

        $str = "DAFTAR HEWAN:<br>";

        foreach($this->daftarHewan as $hewann) {

            // memanggil cetakInfo() dari class yang berbeda, karena dia object dari hewan tersebut
            $str .= "- {$hewann->cetakInfo()} <br>";

        }

        return $str;

    }

}

$hewan1 = new kucing("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000, 100);
$hewan2 = new anjing("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000, 10);

$cetakHewan = new cetakHewan;
$cetakHewan->tambahHewan($hewan1);
$cetakHewan->tambahHewan($hewan2);

echo $cetakHewan->printHewan();

?>