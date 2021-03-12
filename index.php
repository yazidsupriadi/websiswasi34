<!DOCTYPE html>
<html lang="en">

<?php
  require('head.php');
?>

<body>

  <div class="d-flex" id="wrapper">

    <?php
      include('./layout/sidebar.php'); 
    ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php
        include('./layout/navbar.php');
      ?>
      <div class="container-fluid">
        <h1 class="mt-4">Halaman Dashboard</h1>
        <div class="row" data-aos="fade-right">
            <div class="col-3">
                <div class="card mt-3">
                    <div class="card-body bg-success text-white">
                          <p class="font-weight-bold">Jumlah Siswa</p>
                          <p><i class="fa fa-user"></i> 56 orang</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-3">
                    <div class="card-body bg-success text-white">
                          <p class="font-weight-bold">Jumlah Siswa</p>
                          <p><i class="fa fa-user"></i> 56 orang</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-3">
                    <div class="card-body bg-primary text-white">
                          <p class="font-weight-bold">Jumlah kelas</p>
                          <p><i class="fa fa-graduation-cap"></i> 10 kelas</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-3">
                    <div class="card-body bg-primary text-white">
                          <p class="font-weight-bold">Jumlah Guru</p>
                          <p><i class="fa fa-user"></i> 10 orang</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>

  <!-- /#wrapper -->

  <?php
  require('script.php');
  ?>

</body>

</html>
