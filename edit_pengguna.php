<style>
  .alert {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    margin-top: 10px;
    z-index: 9999;
  }
</style>

<?php include 'header.php';

$id = $_GET['id'];
$query = mysqli_query($connect,"select * from pengguna where id='$id'");
$pengguna = mysqli_fetch_array($query);
//print_r($pengguna);?>
    <?php if (isset($_GET['status'])) : ?>
    <?php if ($_GET['status'] === 'berhasil') : ?>
      <div id="success-alert" class="alert alert-success" role="alert">
        Data Berhasil Diupdate!
      </div>
    <?php elseif ($_GET['status'] === 'gagal') : ?>
      <div id="error-alert" class="alert alert-danger" role="alert">
       Data gagal Diupdate!

      </div>
    <?php endif; ?>
  <?php endif; ?>

<div class="container mt-5">
<h3>Edit Data Pengguna</h3>
<form action="update_pengguna.php" method="post">
<tr>
                <td></td>
                <td><input type="hidden" name="id" value="<?php echo $pengguna['id']?>" placeholder="id" class="form-control"></td>
            </tr>  
        <table class="table table-striped table-bordered table-secondary" style="font-family: Arial, sans-serif;">
          <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $pengguna['nama']?>" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="usernama" value="<?php echo $pengguna['usernama']?>" placeholder="Username" class="form-control"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="password" value="<?php echo $pengguna['password']?>" placeholder="Password" class="form-control"></td>
          </tr>
        </table> 
        <div class="text">
      <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
      <a href="list_pengguna.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        </div>
      </from>
</div>
<script>
  // Hide success alert after 2 seconds
  setTimeout(function() {
    var successAlert = document.getElementById('success-alert');
    if (successAlert) {
      successAlert.style.display = 'none';
    }
  }, 2000);

  // Hide error alert after 2 seconds
  setTimeout(function() {
    var errorAlert = document.getElementById('error-alert');
    if (errorAlert) {
      errorAlert.style.display = 'none';
    }
  }, 2000);
  </script>
<?php include 'footer.php'?>
