<!-- autoloading digunakan untuk memanggil class (file) tanpa harus menggunakan require, jadi secara otomatis memanggilnya -->

<?php 

// karena sejatinya oop adalah classnya berbeda-beda file, maka kita perlu memisah2kan filenya. cara2 sebelumnya hanyalah cara barbar
// cara satu2nya yang terpikirkan, mungkin adalah require. tetapi itu adalah cara barbar, oleh sebab itulah ada autoloading

// require "App/Hewan/InfoHewan.php";
// require "App/Hewan/Hewan.php";
// require "App/Hewan/Anjing.php";
// require "App/Hewan/Kucing.php";
// require "App/Hewan/CetakHewan.php";
// yang diatas masih cara barbar, maka kita perlu requirenya di php yang berbeda agar lebih ringkas

require "App/init.php";

$hewan1 = new kucing("Kuroo", "Anggora", "Hitam", "Turki", "Laki-laki", 2500000, 100);
$hewan2 = new anjing("Kun", "Buldog", "Cokelat", "Inggris", "Laki-laki", 1000000, 10);

$cetakHewan = new cetakHewan;
$cetakHewan->tambahHewan($hewan1);
$cetakHewan->tambahHewan($hewan2);

echo $cetakHewan->printHewan();

new test;


?>