<?php
class Mahasiswa {
    protected $nim;
    protected $nama;
    protected $status;
    private $tahun_lahir;
    private $umur;
    
    function __construct() {
        $this->status = "Aktif";
    }
    
    function getData() {
        return "NIM : ".$this->nim."<br>".
               "Nama : ".$this->nama."<br>".
               "Status : ".$this->status;
    }
    
    function setData($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }
    
    function setNim($nim) {
        $this->nim = $nim;
    }
    
    function getNim() {
        return $this->nim;
    }
    
    function setNama($nama) {
        $this->nama = $nama;
    }
    
    function getNama() {
        return $this->nama;
    }
    
    function setTahunLahir($tahun_lahir) {
        $this->tahun_lahir = $tahun_lahir;
        $this->setUmur();
    }
    
    function getTahunLahir() {
        return $this->tahun_lahir;
    }
    
    function setUmur() {
        $this->umur = date('Y') - $this->tahun_lahir;
    }
    
    function getUmur() {
        return $this->umur;
    }
}
?>