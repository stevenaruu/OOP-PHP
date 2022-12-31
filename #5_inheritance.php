<?php

class hewan {

   public $nama, $ras, $warna, $asal, $jenisKelamin, $harga, $berat;

   public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $berat = 0){
        $this->nama = $nama;
        $this->ras = $ras;
        $this->warna = $warna;
        $this->asal = $asal;
        $this->jenisKelamin = $jenisKelamin;
        $this->harga = $harga;
        $this->berat = $berat;
   }

   public function getLabel(){

      return "$this->nama, $this->ras";

   }

}

class cetakIngfo {

    public function cetak(hewan $hewan) {

        // SEBELUMNYA MENGGUNAKAN TIPE, SKRG PROPERTY TIPENYA DI HAPUS. LANGSUNG MENGGUNAKAN INHERITANCE
        $str = "{$hewan->tipe}: {$hewan->getLabel()} | Rp. {$hewan->harga}";
        
        // SEBELUMNYA
        // KONSEP INHERITANCE (barbar)
        if($hewan->tipe == "Anjing"){
            // .= artinya $str . $str = $str, seolah2 concat
            $str .= " - {$hewan->berat} Kilogram";
        }else if($hewan->tipe == "Kucing"){
            $str .= " - {$hewan->berat} Hektogram";
        }

        return $str;

    }

}

// SESUDAH
// IHNERITANCE
class anjing extends hewan {

    public function cetakAnjing(){

        $str = "Anjing: {$this->getLabel()} | Rp. {$this->harga} - {$this->berat} Kilogram";
        return $str;

    }

}

class kucing extends hewan {

    public function cetakKucing(){

        $str = "Kucing: {$this->getLabel()} | Rp. {$this->harga} - {$this->berat} Hektogram";
        return $str;

    }

}

$hewan1 = new kucing("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000, 100);
$hewan2 = new anjing("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000, 10);

echo $hewan1->cetakKucing();
echo "<br>";
echo $hewan2->cetakAnjing();


?>