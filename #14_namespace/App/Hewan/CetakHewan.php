<?php 

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

?>