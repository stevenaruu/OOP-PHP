<!-- namespace digunakan untuk memungkinkan kita untuk membuat class dengan nama yang sama. Karena sejatinya PHP sebenarnya tidak memperbolehkan kita mempunyai 2 class yang namanya sama  -->

<?php 

require "App/init.php";

$hewan1 = new kucing("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000, 100);
$hewan2 = new anjing("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000, 10);

$cetakHewan = new cetakHewan;
$cetakHewan->tambahHewan($hewan1);
$cetakHewan->tambahHewan($hewan2);

echo $cetakHewan->printHewan();

echo "<hr>";

// alias, jika code terlalu panjang akan meribetkan
// new App\Hewan\User
// new hewanUser -> lebih efisien bukan?
use App\Hewan\User as hewanUser;
use App\Service\User as serviceUser;

new hewanUser;
echo "<br>";
new serviceUser;

?>