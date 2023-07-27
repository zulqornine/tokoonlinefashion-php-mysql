<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM produk WHERE id_produk = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

?> 

<!DOCTYPE html>
<html lang="en">
  <head> 
    <?php 
    include 'header.php'
    
    
    ?>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Preloader -->
      <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__shake"
          src="dist/img/AdminLTELogo.png"
          alt="AdminLTELogo"
          height="60"
          width="60"
        />
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <?php 
    include 'nav.php'
    
    
    ?>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <?php 
    include 'sidebar.php'
    
    
    ?>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">TAMBAH DATA PRODUK</h1>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="update-produk.php" method="post">
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label for="masukanNomer">No</label> -->
                    <!-- <input type="number" class="form-control" id="masukanNomer" placeholder="No" name="no" required> -->
                    
                    <!-- <input type="text" name="no" placeholder="Masukan No" class="form-control" value="<?php echo $row['no'] ?>" >
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="masukanNamaMerek">Nama Merek</label>
                     <input type="text" class="form-control" id="masukanNamaMerek" placeholder="Nama merek" name="nama_merek" required> -->
                    <!-- <input type="text" name="nama_merek" value="<?php echo $row['nama_merek'] ?>" placeholder="Masukkan Nama Merek" class="form-control">
                  </div> -->
                  <div class="form-group">
                    <label for="masukanNamaProduk">No</label>
                    <input type="hidden" name="id_produk" value="<?php echo $row['id_produk'] ?>">
                    <!-- <input type="text" class="form-control" id="masukanWarna" placeholder="Warna" name="warna" required> -->
                    <input type="text" name="no" value="<?php echo $row['no'] ?>" placeholder="Masukkan No Produk" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="masukanNamaProduk">Nama Produk</label>
                    <!-- <input type="text" class="form-control" id="masukanWarna" placeholder="Warna" name="warna" required> -->
                    <input type="text" name="nama_produk" value="<?php echo $row['nama_produk'] ?>" placeholder="Masukkan Nama Produk" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="masukanHarga">Harga</label>
                    <!-- <input type="number" class="form-control" id="masukanJumlah" placeholder="Jumlah" name="jumlah" required> -->
                    <input type="text" name="harga" value="<?php echo $row['harga'] ?>" placeholder="Masukkan Harga" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="masukanJumlah">Jumlah</label>
                    <!-- <input type="number" class="form-control" id="masukanJumlah" placeholder="Jumlah" name="jumlah" required> -->
                    <input type="text" name="jumlah" value="<?php echo $row['jumlah'] ?>" placeholder="Masukkan Jumlah" class="form-control">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
  <!-- /.content-wrapper -->
  <footer>
   <?php include 'footer.php' ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
