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

        <?php include 'nav.php' ?>

      </nav>
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
                <h1 class="m-0">PRODUK TAMPIL</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a class="btn-primary rounded p-2" href="tambah-produk.php">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                            include 'koneksi.php';
                            $no = 1;
                            $data = mysqli_query($connection,"select * from produk");
                            while($d = mysqli_fetch_array($data)){
                              ?>
                              <tr style="height:50px; text-align:center;">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama_produk']; ?></td>
                                <td><?php echo $d['harga']; ?></td>
                                <td><?php echo $d['jumlah']; ?></td>
                                <td style="text-align: center;">
                                    <a class="btn-warning rounded p-2" href="edit-produk.php?id=<?php echo $d['id_produk'] ?>">EDIT</a>
                                    
                                    <a class="btn-danger rounded p-2" href="hapus-produk.php?id=<?php echo $d['id_produk'] ?>" onclick="hapusData(<?php echo $d['id_produk'] ?>)">HAPUS</a>



                                </td>
                              </tr>
                                <?php 
                                }
                                ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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
<script>
    function hapusData(id_produk) {
        var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");
        if (konfirmasi) {
            // Jika pengguna menekan tombol OK dalam konfirmasi, maka lakukan aksi penghapusan data.
            // Lakukan penghapusan dengan mengarahkan ke halaman "hapus-produk.php"
            window.location.href = "hapus-produk.php?id=" + id_produk;
        } else {
            // Jika pengguna membatalkan konfirmasi, tidak melakukan apa-apa.
            // Anda bisa menambahkan kode lain jika diinginkan.
        }
    }
</script>


</body>
</html>
