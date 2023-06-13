<?php include 'header.php'?>

<div class="container mt-5">
<h3>Tambah Kabupaten</h3>
<?php if (isset($_GET['status'])) : ?>
    <?php if ($_GET['status'] === 'berhasil') : ?>
      <div id="success-alert" class="alert alert-success" role="alert">
        Berhasil tambahkan data!
      </div>
    <?php elseif ($_GET['status'] === 'gagal') : ?>
      <div id="error-alert" class="alert alert-danger" role="alert">
        Gagal tambahkan data!
      </div>
      <?php endif; ?>
  <?php endif; ?>
<form action="simpan_kabupaten.php" method="post">
    <table class="table table-striped table-bordered table-secondary" style="font-family: Arial, sans-serif;">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_kabupaten" placeholder="ID" class="form-control"></td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td><input type="text" name="nama_kabupaten" placeholder="Kabupaten" class="form-control"></td>
            </tr>
        </table>
        <div class="text">
      <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
      <a href="kabupaten.php" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
  </form>
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