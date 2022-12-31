<?php 
// karena kita sudah menggunakan namespace, maka akan terjadi error karena $classname akan berubah menjadi App\dst.
spl_autoload_register(function($className) {

    // App\Hewan\User = ["App", "Hewan", "User"];
    $className = explode("\\", $className); // karena \ adalah exepction character, maka perlu \\ kali

    // karena menggunakan end(), maka yang diambil akan User
    $className = end($className);

    require_once "Hewan/" . $className . ".php";
    // echo $className;

});

spl_autoload_register(function($className) {

    // App\Hewan\User = ["App", "Hewan", "User"];
    $className = explode("\\", $className); // karena \ adalah exepction character, maka perlu \\ kali

    // karena menggunakan end(), maka yang diambil akan User
    $className = end($className);

    require_once "Service/" . $className . ".php";
    // echo $className;

});

?>