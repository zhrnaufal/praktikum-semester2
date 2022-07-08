<?php
function kelulusan($nilai_akhir) {

    if ($nilai_akhir <= 55) {
    return "LULUS";
    }else {
    return "TIDAK LULUS";
    }
}
function grade($_grade){
    if ($nilai_akhir <= 35) {
        $grade = "E";
    } elseif($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        $grade = "D";
    } elseif($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        $grade = "C";
    } elseif($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        $grade = "B";
    } elseif($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        $grade = "A";
    } else{
        return "Nilai yang Anda Masukkan Salah!";
    }

}
?>
