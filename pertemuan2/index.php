<?php

//  Sintaks PHP

// komentar adalah sintaks yang tidak akan pernah di eksekusi, di dalam php komentar ada dua cara //(untuk satu baris) & /*untuk banyak baris*/

// Standar Output
// echo, print
// print_r
// var_dump

echo "Rizqi Miftakhul Ulum";
echo "<br>";
print "Rizqi Miftakhul Ulum";
echo "<br>";
print_r("Rizqi Miftakhul Ulum");
echo "<br>";
var_dump("Rizqi Miftakhul Ulum");
echo "<hr>";

// di php kutip " sedikit lebih sakti di banding kutip ', karena bisa di gunakan untuk menyimpan variabel

// penulisan sintaks PHP
// 1. PHP didalam HTML
// 1. HTML didalam PHP

// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Rizqi Miftakhul Ulum";

echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %

$x = 10;
$y = 20;
echo $x * $y;
echo "<hr>";
// penggabung string / concantenation / concat
// .
$nama_depan = "Rizqi";
$nama_belakang = "ulum";
echo $nama_depan . " " . $nama_belakang;
echo "<hr>";

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x;
echo "<br>";
$nama = "Rizqi";
$nama .= " ";
$nama .= "Miftakhul";
echo $nama;
echo "<br>";

// Perbandingan
// <, >, <=, >=, ==
var_dump(1 > 5);
var_dump(1 == "1");
echo "<br>";

// Identitas
// ===, !==
var_dump(1 === "1");
echo "<br>";

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0); // true

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Halo, Selamat Datang <?php echo $nama ?></h1>
</body>

</html>