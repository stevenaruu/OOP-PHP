<?php 

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
    
    abstract public function cetak();

}

?>