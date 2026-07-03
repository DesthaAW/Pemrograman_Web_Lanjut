<?php
include_once("Mahasiswa.php");
include_once("MataKuliah.php");
include_once("MahasiswaTransfer.php");

echo "<h2>Latihan 1</h2>";

$mahasiswa_1 = new Mahasiswa();
$mahasiswa_1->setData("A11.2023.15468", "Destha Amartha Wijaya");
echo $mahasiswa_1->getData();

echo "<hr>";

$matakuliah_1 = new MataKuliah();
$matakuliah_1->setData("A11.4416", "Pemrograman Web Lanjut", 2);
echo $matakuliah_1->getData();

echo "<h2>Latihan 2</h2>";


echo "Untuk Latihan 2, asumsi variabel nim dan nama diubah menjadi public:<br>";
echo "NIM (langsung): " . (isset($mahasiswa_1->nim) ? $mahasiswa_1->nim : "Protected/Private - Cannot access directly") . "<br>";
echo "Nama (langsung): " . (isset($mahasiswa_1->nama) ? $mahasiswa_1->nama : "Protected/Private - Cannot access directly");

echo "<h2>Latihan 3</h2>";

$mahasiswa_2 = new Mahasiswa();
$mahasiswa_2->setNim("A11.2023.15468");
$mahasiswa_2->setNama("Destha Amartha Wijaya");
$mahasiswa_2->setTahunLahir(2004);

echo "NIM : ".$mahasiswa_2->getNim()."<br>";
echo "Nama : ".$mahasiswa_2->getNama()."<br>";
echo "Tahun Lahir : ".$mahasiswa_2->getTahunLahir()."<br>";
echo "Umur : ".$mahasiswa_2->getUmur()."<br>";

echo "<hr>";

echo "Coba ubah nilai umur secara langsung:<br>";
if (property_exists($mahasiswa_2, 'umur') && isset($mahasiswa_2->umur)) {
    $mahasiswa_2->umur = 100;
    echo "Umur setelah diubah: ".$mahasiswa_2->umur."<br>";
} else {
    echo "Umur is private and cannot be accessed directly<br>";
}
echo "Umur dari getter: ".$mahasiswa_2->getUmur()."<br>";

echo "<h2>Latihan 4</h2>";

$mahasiswa_transfer = new MahasiswaTransfer("A, B+, A-, B");
$mahasiswa_transfer->setData("A11.2023.15468", "Destha Amartha Wijaya");

echo $mahasiswa_transfer->getData();
?>