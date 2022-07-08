
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
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
          <h3 class="card-title">Biodata Mahasiswa</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        
        <div class="row mb-2">
          <div class="col-sm-8">
          <table class="table table-striped">
            <tbody>
              <tr><td>NIM</td><td><?=$mhs->nim?></td></tr>
              <tr><td>Nama Lengkap</td><td><?=$mhs->nama?></td></tr>
              <tr><td>Gender</td><td><?=$mhs->gender?></td></tr>
              <tr><td>Tempat, Tgl Lahir</td><td><?=$mhs->tmp_lahir?>,
            <?=$mhs->tgl_lahir?></td></tr>
            <tr><td>Prodi</td><td><?=$mhs->prodi_kode?></td></tr>
            <tr><td>IPK</td><td><?=$mhs->ipk?></td></tr>
            </tbody>
</table>
          </div>
          <div class="col-sm-4">
            
            <?php
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $filegambar = '/uploads/mahasiswa'.$mhs->foto;
            if (file_exists($filegambar)){
              echo '<img src="'.$filegambar.' alt="foto"/>' ;
            }else {
              echo '<img src="'.base_url('/uploads/noimage.png').'" alt="foto"/>';
            }
            ?>
            <br>
            Foto Mahasiswa : <?=$mhs->foto?>
            <br>
            <?= form_open_multipart('Mahasiswa/upload') ?>
                            <input type="file" name="foto" id="foto" size="300">
                            <input type="hidden" name="idmahasiswa" value="<?= $mhs->foto ?>">
                            <input type="submit" value="Upload Foto" class="btn btn-primary">
                            <?= form_close() ?>
          </div>
        </div>

        </div>

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>