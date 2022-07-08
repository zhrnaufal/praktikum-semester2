<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Dosen</h1>
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
          <h2 class="card-title">Data Dosen</h2>
          

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
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2 align='center'>Selamat Datang $username</h2>";
}
?>
<body>

        </h3>
        <a class="btn btn-secondary" href="<?php echo base_url("index.php/dosen/form") ?>">Create Dosen</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>NIDN</th>
                    <th>Pendidikan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($dosen as $dsn) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $dsn->nama ?></td>
                        <td><?= $dsn->nidn ?></td>
                        <td><?= $dsn->pendidikan ?></td>
                        <td>
                            <a class="btn btn-secondary" href="<?php echo base_url("index.php/dosen/data/$dsn->id") ?>">View</a>
                            <a class="btn btn-primary" href="<?php echo base_url("index.php/dosen/edit/$dsn->id") ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url("index.php/dosen/delete/$dsn->id") ?>" onclick="return deleteDosen('Anda yakin ingin menghapus mahasiswa yang bernama <?php echo $dsn->nama ?>?')">Delete</a>
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

