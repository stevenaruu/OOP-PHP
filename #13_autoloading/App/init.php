<?php 

// begini sedikit lebih baik, tetapi kita harus inisialisasi terus setiap ada class baru, maka itu kita perlu autoloading
// require "Hewan/InfoHewan.php";
// require "Hewan/Hewan.php";
// require "Hewan/Anjing.php";
// require "Hewan/Kucing.php";
// require "Hewan/CetakHewan.php";

// AUTOLOADING
// karena bersifat autoloading, make spl_autoload_register akan load terus nama2 class, hingga akhir
// untuk menggunakan autoload, nama file dengan classnya harus sama. Jika tidak sama, maka autoloading tidak akan berfungsi atau error
spl_autoload_register(function($className) {

    require "Hewan/" . $className . ".php";
    // echo $className;

})

?>