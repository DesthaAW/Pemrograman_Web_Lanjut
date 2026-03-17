<?php
class Mahasiswa
{
    // Properties
    public $nim;
    public $nama;
    public $programStudi;

    // Method set data
    function setData($nim, $nama, $programStudi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }

    // Method get data (tetap ada sesuai materi)
    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi
        ];
    }

    // Method tampilkan data (yang digunakan untuk output)
    function tampilkanData()
    {
        echo "<b>NIM:</b> " . $this->nim . "<br>";
        echo "<b>Nama:</b> " . $this->nama . "<br>";
        echo "<b>Program Studi:</b> " . $this->programStudi . "<br><br>";
    }
}
?>