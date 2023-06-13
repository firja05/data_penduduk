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

$id_kabupaten = $_GET['id_kabupaten'];
$query = mysqli_query($connect,"select * from kab where id_kabupaten='$id_kabupaten'");
$kab = mysqli_fetch_array($query);
?>

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
<h3>Edit Data Kabupaten</h3>
<form action="update_kabupaten.php" method="post">
        <tr>
                <td></td>
                <td><input type="hidden" name="id_kabupaten" value="<?php echo $kab['id_kabupaten']?>" placeholder="id" class="form-control"></td>
            </tr> 
            <table class="table table-striped table-bordered table-secondary" style="font-family: Arial, sans-serif;"> 
          <tr>
                <td>Kabupaten</td>
                <td><input type="text" name="nama_kabupaten" value="<?php echo $kab['nama_kabupaten']?>" placeholder="Kabupaten" class="form-control"></td>
            </tr>
        </table> 
        <div class="text">
      <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
      <a href="kabupaten.php" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
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
