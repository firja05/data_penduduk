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

$nik = $_GET['nik'];
$query = mysqli_query($connect,"select * from penduduk where nik='$nik'");
$penduduk = mysqli_fetch_array($query);
//print_r($pengguna);
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
    <h3>Edit Data Penduduk</h3>

    <form action="update_penduduk.php" method="post">
        <input type="hidden" name="nik" value="<?php echo $penduduk['nik']?>" placeholder="NIK" class="form-control">
        <table class="table table-striped table-bordered table-secondary" style="font-family: Arial, sans-serif;">    
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $penduduk['nama']?>" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $penduduk['alamat']?>" placeholder="Username" class="form-control"></td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td>
                    <select name="id_kabupaten" class="form-select">
                        <?php
                        $kab = mysqli_query($connect, "select * from kab");
                        while ($kabu = mysqli_fetch_array($kab)) {
                            echo "<option value='".$kabu['id_kabupaten']."'";
                            echo $kabu['id_kabupaten']==$penduduk['id_kabupaten']?"selected":"";
                            echo ">".$kabu['nama_kabupaten']."</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>
                    <select name="id_kecamatan" class="form-select">
                        <?php
                        $kec = mysqli_query($connect, "select * from kec");
                        while ($keca = mysqli_fetch_array($kec)) {
                            echo "<option value='".$keca['id_kecamatan']."'";
                            echo $keca['id_kecamatan']==$penduduk['id_kecamatan']?"selected":"";
                            echo ">".$keca['nama_kecamatan']."</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
              <td>Golongan Darah</td>
              <td><input type="text" name="golongan_darah" value="<?php echo $penduduk['golongan_darah']?>" placeholder="Golongan darah" class="form-control"></td>
          </tr>

            <tr>
                <td>Pekerjaan</td>
                <td>
                    <select name="id_pekerjaan" class="form-select">
                        <?php
                        $pek = mysqli_query($connect, "select * from pekerjaan");
                        while ($peke = mysqli_fetch_array($pek)) {
                            echo "<option value='".$peke['id_pekerjaan']."'";
                            echo $peke['id_pekerjaan']==$penduduk['id_pekerjaan']?"selected":"";
                            echo ">".$peke['nama_pekerjaan']."</option>";
                        }
                        ?>  
                    </select>
                </td>
            </tr>
        </table> 
        <div class="text">
            <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
            <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
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

<?php include 'footer.php'; ?>
