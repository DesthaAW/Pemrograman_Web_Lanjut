<?php
class MataKuliah {
    var $kode;
    var $nama;
    var $sks;
    
    function getData() {
        return "Kode : ".$this->kode."<br>".
               "Nama : ".$this->nama."<br>".
               "SKS : ".$this->sks;
    }
    
    function setData($kode, $nama, $sks) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->sks = $sks;
    }
}
?>