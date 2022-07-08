<?php
class NilaiMahasiswa{
    var $nim;
    var $nilai;
    var $matkul;

    function __construct($matkul, $nilai, $nim) {
        $this->nim = $nim;
        $this->nilai = $nilai;
        $this->matkul = $matkul;
    }
    function grade() {
        if($this->nilai >= 0 && $this->nilai <= 35) return "E";
        elseif($this->nilai >= 36 && $this->nilai <= 55) return "D";
        elseif($this->nilai >= 56 && $this->nilai <= 69) return "C";
        elseif($this->nilai >= 70 && $this->nilai <= 84) return "B";
        elseif($this->nilai >= 85 && $this->nilai <= 100) return "A";
    }
    function hasil() {
        if($this->nilai >= 56 && $this->nilai <=100) return "Lulus";
        elseif($this->nilai >= 0 && $this->nilai <=55) return "Tidak Lulus";
    }
}
?>