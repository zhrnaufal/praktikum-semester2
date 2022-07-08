<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Dosen</h1>
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
          

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-sm-8">
          <table class="table table-striped">
            
        <tbody>
                <tr> 
                  <td>Id</td> <td>
                  <?= $dosen->id ?></td>  
                </tr>
                <tr> 
                  <td>Nama</td>  
                  <td><?= $dosen->nama ?>  
                </tr>
                <tr> 
                  <td>Tempat Lahir </td> 
                  <td><?= $dosen->tgl_lahir ?> 
                </tr>
                <tr> 
                  <td>Tanggal Lahir</td> 
                  <td><?= $dosen->tgl_lahir ?> </tr>
                <tr> 
                  <td>NIDN</td> 
                  <td><?= $dosen->nidn ?></td> 
                  </tr>
                <tr> 
                  <td>Pendidikan</td> 
                  <td><?= $dosen->pendidikan ?> 
                </tr>
            
            </tbody>
        </table>

        <div class="col-sm-4">
            
            <?php
            $filegambar = '/uploads/dosen'.$dosen->foto;
            if (file_exists($filegambar)){
              echo '<img src="'.$filegambar.' alt="foto"/>' ;
            }else {
              echo '<img src="'.base_url('/uploads/noimage.png').'" alt="foto"/>';
            }
            ?>
            <br>
            Foto Dosen : <?=$dosen->foto?>
            <br>
            <?= form_open_multipart('dosen/upload') ?>
            <input type="file" name="foto" id="foto" size="300">
            <input type="hidden" name="iddosen" value="<?= $dosen->id?>">
            <input type="submit" value="Upload Foto" class="btn btn-primary">
            <?= form_close() ?>
          </div>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>