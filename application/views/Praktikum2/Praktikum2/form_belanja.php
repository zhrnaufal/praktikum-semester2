
<form method="GET" action="Praktikum2.php">
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

$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$produk = isset($_GET['produk']) ? $_GET['produk'] : '';
$jumlah = isset($_GET['jumlah ']) ? $_GET['jumlah '] : '';


if ($_produk == 'tv') {
    $total_harga = $_umlah * 1000000;
} elseif($produk == 'kulkas') {
    $total_harga = $jumlah * 2000000;
} elseif($produk == 'mesin_cuci') {
    $total_harga = $jumlah * 3000000;
}else {
    "Silahkan Isi Form dengan Teliti";
}

echo 'Nama : '. $nama;
echo '<br>Produk Pilihan : '. $produk;
echo '<br>Jumlah : '. $jumlah;

echo '<br><br>Total Harga : '. number_format($total_harga);

?>
    </div>
</div>

    </div>
</body>
</html>