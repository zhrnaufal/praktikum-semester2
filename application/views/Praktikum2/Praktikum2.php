<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">

            <form method="POST" action="Praktikum2.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-archive"></i>
          </div>
        </div> 
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input class="btn btn-success" type="submit" value="Kirim" name="proses">
    </div>
  </div>
</form>


<div class="row">
    <div class="col-md-12">
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$produk = isset($_POST['produk']) ? $_POST['produk'] : '';
$jumlah = isset($_POST['jumlah ']) ? $_POST['jumlah '] : '';

if ($_produk == 'tv') {
    $total_harga = $jumlah * 1000000;
} elseif($_produk == 'kulkas') {
    $total_harga = $jumlah * 2000000;
} elseif($_produk == 'mesin_cuci') {
    $total_harga = $jumlah * 3000000;
}else {
    "Silahkan Isi Form dengan Teliti";
}

echo 'Nama : '. $nama;
echo '<br>Produk Pilihan : '. $produk;
echo '<br>Jumlah : '. $jumlah;

echo '<br><br>Total Harga : '.number_format((float)$total_harga , 2, '.', '');

?>
    </div>
</div>

    </div>
      </div>
     </div>
    </div>
  </div>
</form>
</div>
<div class="content-wrapper">

  <form class="form-horizontal" method="POST" action="nilai_siswa.php" >
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="" selected disabled>Pilih</option>
        <option value="PPKN">Pendidikan Kewarganegaraan</option>
        <option value="STK">Statistika</option>
        <option value="WEB2">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-archive"></i>
          </div>
        </div> 
        <input id="nilai_uts" name="nilai_uts" placeholder="Isi Nilai UTS" type="number" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-archive"></i>
          </div>
        </div> 
        <input id="nilai_uas" name="nilai_uas" placeholder="Isi Nilai UAS" type="number" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-archive"></i>
          </div>
        </div> 
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Isi Nilai Tugas" type="number" required="required" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" name="proses">
    </div>
  </div>
</form>
</div>

</div>
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



