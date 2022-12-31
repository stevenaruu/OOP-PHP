<?php

class hewan {

   public $nama, $ras, $warna, $asal, $jenisKelamin, $harga;

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

// OBJECT TYPE
class cetakIngfo {

    public function cetak(hewan $hewan) { //memberi hewan di depan agar parameter yang diterima hanya class hewan

        // Kuroo, Anggora | Rp. 2500000
        // jika menggunakan "{ [isinya] }", maka tidak perlu melakukan concat dengan . lagi
        $str = "{$hewan->getLabel()} | Rp. {$hewan->harga}";
        return $str;

    }

}

$hewan1 = new hewan("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000);
$hewan2 = new hewan("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000);

// SEBELUMNYA
echo "Kucing: " . $hewan1->getLabel();
echo "<br>";
echo "Anjing: " . $hewan2->getLabel();
echo "<br><br>";

// SESUDAH
$cetak1 = new cetakIngfo;
echo "Kucing: " . $cetak1->cetak($hewan1);


?>