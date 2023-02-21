<?php

// ini sebuah komentar
/*
Ini adalah sebuah komentar
*/

// echo "Helo World <br>";
// print_r("Nama Saya Faqih <br>");
// var_dump("Kuliah di STT Terpadu Nurul Fikri <br>");

// //Mebuat Variabel User
// $nama = "Ahmad Al-Faqih";
// $umur = 18;
// $berat = 70.2;
// $mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya $umur tahun <br>" ;
// echo "Berat badan saya adalah $berat kg<br>";
// echo "";

// //membuat variabel sistem
// echo "Dokument Root " . $_SERVER["DOCUMENT_ROOT"];echo "<br>";
// echo "Nama File " . $_SERVER["PHP_SELF"];

// //membuat variabel konstanta
// define("PHI", 3.14);
// $jari = 8;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari = $luas <br>";
// echo "Keliling lingkaran adalah $keliling";

//Membuat array
$programs = ["php", "JavaScript", "HTML", "CSS"];
// echo $programs[0];
// echo count($programs);
// $programs[] = "MySql";
// echo count($programs);

// unset($programs[0]);
// echo "<br>" . $programs[0];

echo "<ol>";
foreach($programs as $programs){
    echo "<li> $programs </li>";

}
echo "</ol>";



?>