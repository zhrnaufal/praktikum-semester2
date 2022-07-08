<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Program Studi</h1>
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
          <h2 class="card-title">Data Program Studi STT-NF</h2>

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
        <a class="btn btn-secondary" href="prodi/create" role="button">Create Program Studi</a>
        <table class="table table-striped">
         <thead>
          <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Program Studi</th>
          <th>Ketua Prodi</th>
          </tr>
         </thead>
         <tbody>
            <?php
                $nomor = 1;
                foreach($list_prodi as $row) {
                  ?>
                  <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row->kode?></td>
                    <td><?=$row->nama?></td>
                    <td><?=$row->kaprodi?></td>
                    <td>
              <a class="btn btn-secondary" href="prodi/view?id=<?=$row->kode?>">view</a>
              <a class="btn btn-primary" href="prodi/edit?id=<?=$row->kode?>">Edit</a>
              <a class="btn btn-danger" href="prodi/delete?id=<?=$row->kode?>"
              onclick="if(!confirm('Anda Yakin Hapus Program Studi<?=$row->kode?>?')) {return false}"
              >Delete</a>
            </td>
                  </tr>
                  <?php
                  $nomor++;
                  
                }
                
                ?>
         </tbody>
         </table>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>