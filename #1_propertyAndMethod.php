<!-- MOBIL -->

<!-- PROPERTY -->
<!-- 

    - nama
    - merk
    - warna
    - kecepatanMaksimal
    - jumlahPenumpang

 -->

 <!-- METHOD -->
 <!-- 

    tambahKecepatan()
    kurangiKecepatan()
    belokKiri()
    belokKanan()

  -->

<?php 

class hewan {

   // property
   public $nama = "nama", $ras = "ras", $warna = "warna", $asal = "asal", $jenisKelamin = "jenis kelamin", $harga = 0;

   // method
   public function getLabel() {

      // untuk memanggil variabel, yang scopenya berbeda, harus menggunakan $this-> sama seperti mengambil dari scope diatas
      return "$this->nama, $this->ras";

   }

}

// hewan1 untuk test, value default
$hewan1 = new hewan();
var_dump($hewan1);

echo "<br>";

// hewan2 untuk, mengubah value defaultnya dengan isinya. menggunakan ->
$hewan2 = new hewan();
// kucing
$hewan2->nama = "Kuroo";
$hewan2->ras = "Anggora";
$hewan2->warna = "Hitam";
$hewan2->asal = "Turki";
$hewan2->jenisKelamin = "Laki-laki";
$hewan1->harga = 2500000;
var_dump($hewan2);

echo "<br><br>";

$hewan3 = new hewan();
// anjing
$hewan3->nama = "Kun";
$hewan3->ras = "Buldog";
$hewan3->warna = "Cokelat";
$hewan3->asal = "Inggris";
$hewan3->jenisKelamin = "Laki-laki";
$hewan3->harga = 1000000;

// . digunakan untuk concat. jika di js menggunakan + maka di php menggunakan .
echo "Kucing: " . $hewan2->getLabel();
echo "<br>";
echo "Anjing: " . $hewan3->getLabel();



?>