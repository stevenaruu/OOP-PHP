<!-- terdapat 2 penulisan constant di php -->
<!-- 

define(namaConstant, valueConstant);

const namaConstant = valueConstant;

lalu perbedaanya apa? jika define(), maka harus di luar class, atau biasa disebut global variable, tetapi jika const bisa di lakukan di dalam class maupun diluar

 -->

<?php 
 
// penulisan constant dalam bentuk define
define('NAMA', 'Steven Forsythia');

class cobaConstant {

    // define() tidak bisa di dalam class
    const UMUR = 18;

}

// untuk pemanggilannya tidak usah menggunakan $
echo "Nama saya: " . NAMA;
echo "<br>";
// pemanggilan const di dalam class, sama seperti static keyword
echo "Umur saya: " . cobaConstant::UMUR;

// terdapat berbagai magic constant di dalam php
// MAGIC CONSTANT
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

echo "<hr>";

// __lINE__
echo __LINE__; // untuk menampilkan berada di line mana kita

echo "<br>";

// __FILE__
echo __FILE__; // menampilkan berada di file mana kita

echo "<br>";

// __FUNCTION__
function testMagicConstant() {

    return __FUNCTION__;

}
echo testMagicConstant(); // maka akan memanggil nama functionnya

echo "<br>";

// __CLASS__
class testClassMGC {

    public $test = __CLASS__;

}

$obj = new testClassMGC;
echo $obj->test; // maka akan memanggil nama classnya

 
?>