<?php

class hewan {

   public $nama, $ras, $warna, $asal, $jenisKelamin, $harga;
    // membuat properti baru
   public $tipe, $berat;

   public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $tipe = "tipe", $berat = 0){
        $this->nama = $nama;
        $this->ras = $ras;
        $this->warna = $warna;
        $this->asal = $asal;
        $this->jenisKelamin = $jenisKelamin;
        $this->harga = $harga;
        $this->tipe = $tipe;
        $this->berat = $berat;
   }

   public function getLabel(){

      return "$this->nama, $this->ras";

   }

}

class cetakIngfo {

    public function cetak(hewan $hewan) {

        $str = "{$hewan->tipe}: {$hewan->getLabel()} | Rp. {$hewan->harga}";

        // KONSEP INHERITANCE
        if($hewan->tipe == "Anjing"){
            // .= artinya $str . $str = $str, seolah2 concat
            $str .= " - {$hewan->berat} Kilogram";
        }else if($hewan->tipe == "Kucing"){
            $str .= " - {$hewan->berat} Hektogram";
        }

        return $str;

    }

}



$hewan1 = new hewan("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000, "Kucing", 100);
$hewan2 = new hewan("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000, "Anjing", 10);

// SEBELUM
$cetak = new cetakIngfo;
echo "Kucing: " . $cetak->cetak($hewan1);
echo "<br><br>";

// SESUDAH
echo $cetak->cetak($hewan1); // jadi mempersingkat kode
echo "<br>";
echo $cetak->cetak($hewan2);


?>