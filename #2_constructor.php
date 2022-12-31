<?php

class hewan {

   public $nama, $ras, $warna, $asal, $jenisKelamin, $harga;

    // CONSTRUCTOR 
    // mengisi default value
   public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0){
        $this->nama = $nama;
        $this->ras = $ras;
        $this->warna = $warna;
        $this->asal = $asal;
        $this->jenisKelamin = $jenisKelamin;
        $this->harga = $harga;
   }

   public function getLabel(){

      return "$this->nama, $this->ras";

   }

}

// SEBELUMNYA SEPERTI INI
// kucing
// $hewan2 = new hewan();
// $hewan2->nama = "Kuroo";
// $hewan2->ras = "Anggora";
// $hewan2->warna = "Hitam";
// $hewan2->asal = "Turki";
// $hewan2->jenisKelamin = "Laki-laki";
// $hewan1->harga = 2500000;
// echo "<br>";

// SESUDAH MENGGUNAKAN CONSTRUCTOR
$hewan1 = new hewan("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000);
$hewan2 = new hewan("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000);

// . digunakan untuk concat. jika di js menggunakan + maka di php menggunakan .
echo "Kucing: " . $hewan1->getLabel();
echo "<br>";
echo "Anjing: " . $hewan2->getLabel();



?>