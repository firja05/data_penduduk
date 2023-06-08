<?php include 'header.php'?>

<div class="container my-5">
<h1 class="text-center mb-4">Data Pengguna</h1>
<div class="d-flex justify-content-between align-items-center mb-3">
  <a href="tambah_pengguna.php" class="btn btn-secondary">
  <i class="bi bi-person-plus-fill"></i>
    Tambah Pengguna
  </a>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-secondary"style="font-family: Arial, sans-serif;">
    <thead class="table-dark">
      <tr>
        <th scope="col" width="30">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col" width="140">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $pengguna = mysqli_query($connect, "SELECT * FROM pengguna");
      while ($row = mysqli_fetch_array($pengguna)) {
      ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['usernama']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td>
            <a href="edit_pengguna.php?id=<?php echo $row['id']; ?>" class="btn btn-info">
            <i class="bi bi-person-fill-gear"></i> 
            </a>
            <a href="delete_pengguna.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
            <i class="bi bi-trash-fill"></i>
            </a>
          </td>
        </tr>
      <?php
        $nomor++;
      }
      ?>
    </tbody>
  </table>
</div>

<?php include 'footer.php'?>
