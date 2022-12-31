<!-- VISIBILITY -->
<!-- 

PUBLIC
dapat digunakan di mana saja, bahkan di luar kelas

PROTECTED
hanya dapat digunakan di dalam sebuah kelas beserta turunannya, maksud dari turunan disini extends

PRIVATE
hanya dapat digunakan di dalam sebuah kelas tertentu saja

 -->
 
<?php

class hewan {

    // visibility public
    public $nama, $ras, $warna, $asal, $jenisKelamin;
    
    // visibility protected
    protected $diskon;

    // visibility diskon
    private $harga;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0){
        $this->nama = $nama;
        $this->ras = $ras;
        $this->warna = $warna;
        $this->asal = $asal;
        $this->jenisKelamin = $jenisKelamin;
        $this->harga = $harga;
    }

    // karena private, maka hanya bisa di akses di parentnya. Selain itu tidak akan bisa
    public function getHarga(){

        return $this->harga - ($this->harga * $this->diskon / 100);

    }

    public function getLabel(){

        return "$this->nama, $this->ras";

   }

    public function cetakInfo() {

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

    // karena protected, maka bisa di atur di childnya. Begitu juga di parentnya. Selain itu akan error
    public function getDiskon($diskon = 0) {
        
        $this->diskon = $diskon;
        return "diskonnya adalah {$diskon}%";

    }

    public function cetakInfo(){

        $str = "Anjing: " . parent::cetakInfo() . " - {$this->kg} Kilogram";
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

        $str = "Kucing: " . parent::cetakInfo() . " - {$this->hg} Hektogram";
        return $str;

    }

}

$hewan1 = new kucing("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000, 100);
$hewan2 = new anjing("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000, 10);

echo $hewan1->cetakInfo();
echo "<br>";
echo $hewan2->cetakInfo();
echo "<hr>";

// visibility: public
// karena public, maka bisa dimainkan sesuka hati
echo "visibility: public <br>";
echo $hewan1->nama = "bukan kucing h3h3";
echo "<br><br>";

// visibility: protected
// karena protected, maka bisa di atur di childnya
echo "visibility: protected <br>";
echo $hewan2->getDiskon(50);
echo "<br><br>";

// visibility: private
// karena private, maka hanya bisa di atur di parentnya
echo "visibility: private <br>";
echo $hewan2->getHarga();
echo "<br><br>";


?>