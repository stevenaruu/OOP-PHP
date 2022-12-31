<?php 

class contohStatic {

    // untuk penggunaan static keyword cukup menggunakan static
    public static $angka = 1;

    public static function hai() {

        // berbeda dengan class yang biasa, untuk penggunaan static harus menggunakan self:: karena untuk memanggil classnya tidak harus inisialisasi, maka perlu self::
        return "Haloo " . self::$angka++ . " kali.<br>";

    } 

}

class contohBukanStatic {

    public $angka = 1;

    public function hai() {

        return "Haloo " . $this->angka++ . " kali.<br>";

    } 

}

// dibuat untuk melihat perbedaanya dengan object biasas
class perbedaan {

    public static $angka = 1;

    public static function hai() {

        return "Haloo " . self::$angka++ . " kali.<br>";

    } 

}

echo "object biasa<br>";
// pemanggilan class biasa, maka perlu inisialisasi
$obj = new contohBukanStatic;
// disini saya memanggil function, untuk melihat incrementnya
echo "object 1<br>";
echo $obj->hai();
echo $obj->hai();
echo $obj->hai();

echo "<hr>";

// membuat object 2, untuk membuktikan perbedaannya dengan static
$obj2 = new contohBukanStatic;
// disini saya memanggil function, untuk melihat incrementnya
echo "object 2<br>";
echo $obj2->hai();
echo $obj2->hai();
echo $obj2->hai();

echo "<hr>";
echo "<hr>";

echo "object menggunakan static<br>";
// untuk menggunakan static, maka kita tidak perlu inisialisasi, hanya perlu memanggil classnya saja
echo contohStatic::hai();

echo "<hr>";
echo "<hr>";

// walau tidak perlu inisialisasi, tetepi object static juga bisa diinisialisasi
$objk = new perbedaan;
// melakukan hal yang sama dengan object biasa
echo "object 1<br>";
echo $objk->hai();
echo $objk->hai();
echo $objk->hai();

echo "<hr>";

// disini perbedaanya lihat baik-baik
$objk2 = new perbedaan;
echo "object 2<br>";
echo $objk2->hai();
echo $objk2->hai();
echo $objk2->hai();

// karena dia static, maka dia akan ke increment, walau sudah diinisialisasi beda object\

?>