<?php
include_once("Mahasiswa.php");

class MahasiswaTransfer extends Mahasiswa {
    protected $daftar_nilai;
    
    function __construct($daftar_nilai) {
        parent::__construct();
        $this->daftar_nilai = $daftar_nilai;
    }
    
    function getData() {
        return parent::getData()."<br>".
               "Daftar Nilai : ".$this->daftar_nilai;
    }
}
?>