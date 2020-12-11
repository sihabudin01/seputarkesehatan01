 
<!-- header -->
<?php 
include "layout-admin/header.php";
include "layout-admin/sidebar.php";

session_start();
if(empty($_SESSION['email'])){
  echo 
  "<script>
  alert('harus login dulu...!!!');
  window.location=('login.php');
  </script>";
}
?>


<!-- /header -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Selamat Datang <?php echo $_SESSION['nama']; ?> Dihalaman Admin :)
      <small>Optional description</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- footer -->
    <?php  include "layout-admin/footer.php"; ?>
    <!-- /footer -->