<div class="border border-primary rounded m-5 p-4">
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
    <input type="submit" value="Simpan" name="proses">
    </div>
  </div>
</form>
