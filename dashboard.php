<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <ol class="breadcrumb">
        <li>
          <a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard </a>
        </li>  
      </ol>
    </section>
  </div>
  <table border="0"  width="1000px">
    <tr>
      <td width="50" height="150">
        <table width="70%" border="1" align="center">
          <tr align="center">
            <td height="120px" bgcolor="">
                <i class="fa fa-user fa-5x"></i>
                <?php
                  $sqlcount = 'SELECT COUNT(*)AS COUNT FROM data';
                  $commit =  mysqli_query($koneksi,$sqlcount);
                  $result = mysqli_fetch_array($commit);
                  echo $result[0];
                ?>
                <p class="announcement-text">DATA PELANGGAN</p>
                <a href="index.php?page=tampil_antri">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </td> 
          </tr>
        </table>
      </td>
      <td width="50" height="150">
        <table width="70%" border="1" align="center">
          <tr align="center">
            <td height="120px" bgcolor="">
                <i class="fa fa-exchange fa-5x"></i>
                <?php
                  $sqlcount = 'SELECT COUNT(*)AS COUNT FROM transaksi2';
                  $commit =  mysqli_query($koneksi,$sqlcount);
                  $result = mysqli_fetch_array($commit);
                  echo $result[0];
                ?>
                <p class="announcement-text">TRANSAKSI</p>
                <a href="index.php?page=tampil_transaksi">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </td> 
          </tr>
        </table>
      </td>
      <td width="50" height="150">
        <table width="70%" border="1" align="center">
          <tr align="center">
            <td height="120px" bgcolor="">
                <i class="fa fa-book fa-5x"></i>
                <?php
                  $sqlcount = 'SELECT COUNT(*)AS COUNT FROM transaksi';
                  $commit =  mysqli_query($koneksi,$sqlcount);
                  $result = mysqli_fetch_array($commit);
                  echo $result[0];
                ?>
                <p class="announcement-text">LAPORAN</p>
                <a href="index.php?page=tampil_laporan">More Info<i class="fa fa-arrow-circle-right"></i></a>
            </td> 
          </tr>
        </table>
      </td>
    </tr>
    
  </table>

</body>
</html>