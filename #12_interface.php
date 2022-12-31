<!-- sebenarnya penggunaan interface tergantung pada pembuatnya. relatif, ingin menggunakan atau tidak. di code ini hanya perumpamaan, atau belajar menggunakan interface -->

<?php

interface infoHewan {

    // di dalam interface, hanya bisa mengisi method. tidak bisa property, dan lainnya. Juga di methodnya, tidak bisa kita atur-atur, maka kita mengaturnya, di dalam kelas turunannya, menggunakan implements
    public function cetakInfo();

}

abstract class hewan {

    protected $nama, $ras, $warna, $asal, $jenisKelamin, $harga, $diskon = 0;

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

    // membuat cetakInfo() menjadi interface, untuk sedikit memahmi interface
    // abstract public function cetakInfo();
    
    // karena agak aneh, jika kita menggunakan abstract class, tapi tidak ada method abstractnya, maka lebih baik kita membuatnya
    // public function cetak(){

    //     $str = "{$this->getLabel()} | Rp. {$this->harga}";
    //     return $str;

    // }
    
    abstract public function cetak();

}

// class anjing implements infoHewan -> penerapannya
// walau ada extends, kita juga bisa menggabungkan dengan implements
class anjing extends hewan implements infoHewan{

    public $kg;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $kg = 0){
        
        parent::__construct($nama, $ras, $warna, $asal, $jenisKelamin, $harga);

        $this->kg = $kg;

    }

    // karena ada interfacenya, maka kita perlu memanggil diturunannya
    public function cetakInfo(){

        $str = "Anjing: " . $this->cetak() . " - {$this->kg} Kilogram";
        return $str;

    }

    public function cetak(){

        $str = "{$this->getLabel()} | Rp. {$this->harga}";
        return $str;

    }

}

class kucing extends hewan implements infoHewan{

    public $hg;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $hg = 0){
        
        parent::__construct($nama, $ras, $warna, $asal, $jenisKelamin, $harga);

        $this->hg = $hg;

    }

    // karena ada interfacenya, maka kita perlu memanggil diturunannya
    public function cetakInfo(){

        $str = "Kucing: " . $this->cetak() . " - {$this->hg} Hektogram";
        return $str;

    }

    public function cetak(){

        $str = "{$this->getLabel()} | Rp. {$this->harga}";
        return $str;

    }

}

class cetakHewan {

    public $daftarHewan = [];

    public function tambahHewan(hewan $hewan) {

        $this->daftarHewan[] = $hewan;

    }

    public function printHewan() {

        $str = "DAFTAR HEWAN:<br>";

        foreach($this->daftarHewan as $hewann) {

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