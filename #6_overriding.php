<?php

class hewan {

    public $nama, $ras, $warna, $asal, $jenisKelamin, $harga;

    // parentnya __construct
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

    // memindahkan, agar menjadi method di class hewan
    // parrent dari cetakInfo() di child cetakInfo()
    public function cetakInfo() {

        $str = "{$this->getLabel()} | Rp. {$this->harga}";
        return $str;

   }

}

class anjing extends hewan {

    public $kg;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $kg = 0){
        
        // overriding, jadi kita tidak usah nulis berulang2, biarkan dia mengambil di parentnya
        parent::__construct($nama, $ras, $warna, $asal, $jenisKelamin, $harga);

        $this->kg = $kg;

    }

    public function cetakInfo(){

        // SEBELUMNYA
        // $str = "Anjing: {$this->tipe}: {$this->getLabel()} | Rp. {$this->harga} - {$this->berat} Kilogram";
        // return $str;

        // SESUDAH
        // OVERRIDING // karena parent:: tidak bisa menggunakan "{ }", maka perlu menggunakan concat (.)
        $str = "Anjing: " . parent::cetakInfo() . " - {$this->kg} Kilogram";
        return $str;

    }

}

class kucing extends hewan {

    public $hg;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $hg = 0){
        
        // overriding, jadi kita tidak usah nulis berulang2, biarkan dia mengambil di parentnya
        parent::__construct($nama, $ras, $warna, $asal, $jenisKelamin, $harga);

        $this->hg = $hg;

    }

    public function cetakInfo(){

        // SEBELUMNYA
        // $str = "Anjing: {$this->tipe}: {$this->getLabel()} | Rp. {$this->harga} - {$this->berat} Kilogram";
        // return $str;

        // SESUDAH
        // OVERRIDING
        $str = "Kucing: " . parent::cetakInfo() . " - {$this->hg} Hektogram";
        return $str;

    }

}

$hewan1 = new kucing("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000, 100);
$hewan2 = new anjing("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000, 10);

echo $hewan1->cetakInfo();
echo "<br>";
echo $hewan2->cetakInfo();


?>