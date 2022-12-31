<?php 

class kucing extends hewan implements infoHewan{

    public $hg;

    public function __construct($nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0, $hg = 0){
        
        parent::__construct($nama, $ras, $warna, $asal, $jenisKelamin, $harga);

        $this->hg = $hg;

    }

    public function cetakInfo(){

        $str = "Kucing: " . $this->cetak() . " - {$this->hg} Hektogram";
        return $str;

    }

    public function cetak(){

        $str = "{$this->getLabel()} | Rp. {$this->harga}";
        return $str;

    }

}

?>