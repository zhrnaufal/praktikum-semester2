<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai IfElse</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="border border-success rounded m-5 p-4">
<?php

$_proses = $_POST['proses'];
$_nama = $_POST['nama'];
$_matkul = $_POST['matkul'];
switch ($_matkul) {
    case 'PPKN':
      $nama_matkul = 'Pendidikan Kewarganegaraan'; 
      break;
    case 'STK':
      $nama_matkul = 'Statistika'; 
      break;
    case 'WEB2':
      $nama_matkul = 'Pemrograman WEB'; 
      break;    
    default:"";
  }
    $_proses = $_POST['proses'];
    $_nilaiUas = $_POST['nilai_uas'];
    $_uts = $_POST['nilai_uts'];
    $_uas = $_POST['nilai_uas'];
    $_tugas = $_POST['nilai_tugas'];
  

    
if (!empty($_proses)) {
  
    // echo 'Proses : '. $_proses;
    // echo '<br><br>Nama : '. $_nama;
    // echo '<br>Mata Kuliah : '. $_matkul;
    // echo '<br>Nilai UAS : '. $_uas;
    // echo '<br>Nilai UTS : '. $_uts;
    // echo '<br>Nilai Tugas : '. $_tugas;

    // echo '<br><br>Nilai Akhir : ' . $nilai_akhir;
    // echo '<br>Dinyatakan : ' . $pernyataan;
    // echo '<br>Grading : ' . $grade;
  
}else {
  echo "Silahkan Isi Form Diatas Terlebih Dahulu";
}

require_once 'libfungsi.php';
$nilai_akhir = ($_uts + $_tugas + $_uas)/3;
$hasil_ujian = kelulusan($nilai_akhir);
$grade_nilai = grade ($_grade)

?>

<div class="row mx-2">
  <div class="col-md-6">
    <h4>
    Nama: <?= $_nama?>
    </h4>
  </div>
  <div class="col-md-6" style="display: flex; justify-content: right;">
    <table width="70%" class="text-left">
      <tr>
        <td><h5>Mata Kuliah</h5></td>
        <td><h5>:</h5></td>
        <td><h5><?= $nama_matkul?></h5></td>
      </tr>
      <tr>
      <td><h5>Grading</h5></td>
        <td><h5>:</h5></td>
        <td><h5><?= $grade_nilai?></h5></td>
      </tr>
    </table>
  </div>
</div>
<table class="table">
  <thead class="table-dark">
    <tr>
      <th>Penilaian</th>
      <th></th>
      <th>Nilai</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nilai UAS</td>
      <td>:</td>
      <td><?= $_uas;?></td>
    </tr>
    <tr>
      <td>Nilai UTS</td>
      <td>:</td>
      <td><?= $_uts;?></td>
    </tr>
    <tr>
      <td>Nilai Tugas</td>
      <td>:</td>
      <td><?= $_tugas;?></td>
    </tr>
    <tr class="<?= $table?>">
      <td>Nilai Akhir</td>
      <td>:</td>
      <td><?= $nilai_akhir;?></td>
    </tr>
  
  </tbody>
</table>
<h3 class="text-right">Dinyatakan : <?= $hasil_ujian; ?></h3>
<h6 class="text-center py-3 mt-5" style="background-color: #5eff89;">Proses: <?= $_proses?></h6>

</div>

</body>
</html>