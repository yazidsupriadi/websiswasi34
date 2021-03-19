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
        <a href="tambahsiswa.php" class="btn btn-primary mt-3">Tambah Siswa</a>
        <div class="row">
            <table class="table mt-3 mr-3 ml-3" data-aos="fade-up" data-aos-duration="1500">
                <thead  class="table-success">
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>0110217042</td>
                        <td>yazid</td>
                        <td>
                            <a href="" class="bg-success p-1"><i class="fa fa-pencil-alt text-white"></i></a>
                            <a href="" class="bg-danger p-1"><i class="fa fa-trash text-white"></i></a>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>0110217044</td>
                        <td>budi</td>
                        <td>
                            <a href="" class="bg-success p-1"><i class="fa fa-pencil-alt text-white"></i></a>
                            <a href="" class="bg-danger p-1"><i class="fa fa-trash text-white"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>0110217043</td>
                        <td>adit</td>
                        <td>
                            <a href="" class="bg-success p-1"><i class="fa fa-pencil-alt text-white"></i></a>
                            <a href="" class="bg-danger p-1"><i class="fa fa-trash text-white"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>0110217041</td>
                        <td>ahmad</td>
                        <td>
                            <a href="" class="bg-success p-1"><i class="fa fa-pencil-alt text-white"></i></a>
                            <a href="" class="bg-danger p-1"><i class="fa fa-trash text-white"></i></a>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
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
