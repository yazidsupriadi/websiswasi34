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
        <h1 class="mt-4">Halaman Siswa</h1>
        <div class="row">
            <div class="col-8">
                
            <form action="" method="">
                <label for="">Nama</label>
                <input type="text" name="nama" value="" class="form-control">
                <label for="">Nim</label>
                <input type="text" name="nim" value="" class="form-control">

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
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
