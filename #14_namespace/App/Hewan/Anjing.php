<?php 

class anjing extends hewan implements infoHewan{

    public $kg;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $kg = 0){
        
        parent::__construct($nama, $ras, $warna, $asal, $jenisKelamin, $harga);

        $this->kg = $kg;

    }

    public function cetakInfo(){

        $str = "Anjing: " . $this->cetak() . " - {$this->kg} Kilogram";
        return $str;

    }

    public function cetak(){

        $str = "{$this->getLabel()} | Rp. {$this->harga}";
        return $str;

    }

}

?>