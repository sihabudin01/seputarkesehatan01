<?php
include "config/conector.php";
session_start(); 
  
    $kod = $_POST['email'];
    $qcekdata = mysqli_query($con,"select * from admin where email ='$kod'");
    $ada = mysqli_num_rows($qcekdata);
    
    if ($ada > 0){
      $tdata = mysqli_fetch_array($qcekdata);
      $_SESSION['idAdmin'] = $tdata['idAdmin'];
      $_SESSION['email'] = $tdata['email'];
      $_SESSION['nama'] = $tdata['nama'];

      header("location:adminpage.php");

    }else{
      echo "<script type='text/javascript'>
        alert('Login Gagal . . . !!!');
        </script>";
      echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    }


?>