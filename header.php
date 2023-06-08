<?php
session_start();
if (empty($_SESSION['usernama'])) {
  header("location:login.php");
}

include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DATA PENDUDUK</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  <style>
    .navbar {
      background-color: #333;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: #fff;
    }

    .navbar-nav .nav-link:hover {
      color: #f8f9fa;
    }

    .dropdown-toggle::after {
      display: none;
    }

    .dropdown-menu {
      background-color: #333;
    }

    .dropdown-item {
      color: #fff;
    }

    .dropdown-item:hover {
      background-color: #212529;
    }

    .btn-exit {
    background-color: transparent;
    border: none;
    color: #fff;
    text-decoration: none; 
    cursor: pointer;
  }

  .btn-exit:hover {
    color: #fff;
  }
  .custom-table th,
    .custom-table td {
    border: 1px solid #000;
    }
  body {
    background-image: url('bgdigital1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="bi bi-umbrella-fill"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Data Penduduk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kabupaten.php">Data Kabupaten/Kota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kecamatan.php">Data Kecamatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list_pengguna.php">Data Pengguna</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link"><i class="bi bi-person-fill"></i> <?php echo $_SESSION['nama']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i> Keluar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
