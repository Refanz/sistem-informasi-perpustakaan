<?php

include_once('../services/session.php');

require '../services/functions.php';

$peminjam = mysqli_num_rows(lihatData("SELECT * FROM tb_peminjam"));

$buku = mysqli_num_rows(lihatData("SELECT * FROM tb_buku"));

$transaksi = mysqli_num_rows(lihatData("SELECT * FROM tb_data_peminjaman"));







?>

<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-icons-1.3.0/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/dashboard/admin.css">

    <title>Dashboard</title>

  </head>

  <body style="overflow-x: hidden;">

  <div class="header">

        <?php include 'dashboard-admin/header.php' ?>

  </div>

  <div class="main">

    <div class="row no-gutters">

    <?php include 'dashboard-admin/sidebar.php'?>

      <div class="col-md-10 p-5 pt-3">

      <h3><i class="bi bi-speedometer2 me-2"></i>DASHBOARD</h3><hr>

      <div class="row text-white">


        <div class="col-md-3 col-sm-12 mb-2">
          <div class="card bg-primary" style="width: 15rem;">
          <div class="card-body ">
            <div class="card-body-icon">
            <i class="bi bi-person-fill me-2"></i>
            </div>
            <h5 class="card-title">JUMLAH MEMBER</h5>
            <div class="display-5"><?=$peminjam;?></div>
            <p class="card-text"></p>
          </div>
        </div>
      </div>

        <div class="col-md-3 col-sm-12 mb-2">
          <div class="card bg-info" style="width: 15rem;">
          <div class="card-body ">
            <div class="card-body-icon">
            <i class="bi bi-book-half me-2"></i>
            </div>
            <h5 class="card-title">JUMLAH BUKU</h5>
            <div class="display-5"><?=$buku;?></div>
            <p class="card-text"></p>
          </div>
        </div>
      </div>

        <div class="col-md-3 col-sm-12 mb-2">
          <div class="card bg-danger" style="width: 15rem;">
          <div class="card-body ">
            <div class="card-body-icon">
            <i class="bi bi-list-task me-2"></i>
            </div>
            <h5 class="card-title">DAFTAR PEMINJAM</h5>
            <div class="display-5"><?=$transaksi;?></div>
            <p class="card-text"></p>
          </div>
        </div>
      </div>

    </div>
    
  </div>

</div>

</div>





    <script src="../assets/bootstrap-5.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dashboard/admin.js"></script>
      
  </body>

</html>