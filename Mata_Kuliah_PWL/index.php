<?php
include "Mahasiswa.php";

// Objek 1 (data diri)
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setData('A11.2023.15468', 'Destha Amartha Wijaya', 'Teknik Informatika');

// Objek 2
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setData('A11.2023.15461', 'Dede Nur Piker', 'Sistem Informasi');

// Objek 3
$mahasiswa3 = new Mahasiswa();
$mahasiswa3->setData('A11.2023.15435', 'Siti Rahma', 'Manajemen Informatika');

// Output sesuai yang diminta
echo "<h3>Data Mahasiswa</h3>";

$mahasiswa1->tampilkanData();
$mahasiswa2->tampilkanData();
$mahasiswa3->tampilkanData();
?>