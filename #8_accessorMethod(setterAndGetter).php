<!-- 

SETTER
digunakan untuk mengset value di functionnya

GETTER
untuk mengambil nilainya

 -->

<?php

class hewan {

    private $nama, $ras, $warna, $asal, $jenisKelamin, $harga, $diskon = 0;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0){
        $this->nama = $nama;
        $this->ras = $ras;
        $this->warna = $warna;
        $this->asal = $asal;
        $this->jenisKelamin = $jenisKelamin;
        $this->harga = $harga;
    }

    // setter
    public function setNama($nama){

        $this->nama = $nama;

    }

    // getter
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

// agar tidak bisa diatur disini
$hewan1->nama = "h3h3 name mu ke changed";

// untuk mengatur perlu menggunakan function di parentnya
// setNama adalah setternya
$hewan1->setNama("Arde");

// memanggil
// getNama adalah getternya
echo $hewan1->getNama();
echo "<br>";

$hewan1->setDiskon(50);
echo "Anda mendapatkan diskon: " . $hewan1->getDiskon() . "%";
echo "<br>";
echo $hewan1->getHarga();
echo "<br>";

// set harga, dan membuat diskon menjadi 0
echo "<br>";
$hewan1->setHarga(2500000);
echo $hewan1->getHarga();


?>