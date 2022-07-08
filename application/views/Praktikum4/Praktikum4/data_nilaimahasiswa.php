<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FORM NILAI MAHASISWA</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="layout-top-nav bg-light">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-primary" href="#">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Form Nilai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Berita</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <div>
              <form class="form-inline" method = "POST">
                <div class="input-group input-group-sm pt-1">
                  <input class="form-control form-control-navbar bg-light" type="search" placeholder="Search"
                    aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar bg-light" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
          <li class="nav-item">
            <div><a href="#" class="nav-link text-primary">Login</a></div>
          </li>
        </ul>
      </div>
    </nav>
    <hr class="mt-0">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 border border-dark">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0">Form Nilai Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Nilai</li>
                      </ol>
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->
              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <form method="POST" action="Praktikum4.php" >
                        <div class="form-group row">
                          <label for="nim" class="col-4 col-form-label text-right">NIM</label>
                          <div class="col-4">
                            <input id="nim" name="nim" placeholder="NIM" type="number" class="form-control"
                              required="required">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="select" class="col-4 col-form-label text-right">Pilih Mata Kuliah</label>
                          <div class="col-4">
                            <select id="select" name="matkul" class="custom-select" required="required">
                              <option value="" selected disabled>Pilih</option>
                              <option value="PPKN">Pendidikan Kewarganegaraan</option>
                              <option value="pw">Pemrograman Web</option>
                              <option value="STK">Statistika</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="nilai" class="col-4 col-form-label text-right">Nilai</label>
                          <div class="col-2">
                            <input id="nilai" name="nilai" placeholder="Nilai" type="number" required="required" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row text-left">
                          <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pt-3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-7 text-center pt-4 pb-4">
                      <?php
                        require_once("class_nilaimahasiswa.php");

                        if(isset($_POST['proses'])) {
                        $nim = $_POST['nim'];
                        $mata_kuliah = $_POST['matkul'];
                        $nilai = $_POST['nilai'];

                        switch ($mata_kuliah) {
                          case 'PPKN':
                            $nama_kuliah = 'Pendidikan Kewarganegaraan'; 
                            break;
                          case 'STK':
                            $nama_kuliah = 'Statistika'; 
                            break;
                          case 'pw':
                            $nama_kuliah = 'Pemrograman WEB'; 
                            break;    
                          default:"";
                        };
                        echo 'NIM : '.$nim;
                        echo '<br/>Mata Kuliah : '.$nama_kuliah;
                        echo '<br/>Nilai : '.$nilai;
                        
                        $mahasiswa = new NilaiMahasiswa($nama_kuliah, $nilai, $nim);
                        echo '<br/>Grade : '.$mahasiswa->grade();
                        echo '<br/>Hasil Ujian : '.$mahasiswa->hasil();

                        }else{
                            echo '<div class="alert alert-danger" role="alert"> Silahkan Lengkapi Data diatas !</div>';
                        }
                        ?>
                    </div>
                    <div class="col-md-3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pt-2">
                    </div>
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
      </div>
      <!-- Default to the left -->
      Created By <strong>Muhammad Firdaus</strong> #2022
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>
</html>