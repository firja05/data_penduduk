<?php include 'header.php'?>

<div class="container mt-5">
  <h3>Tambah Data Penduduk</h3>
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
  <form action="simpan_penduduk.php" method="post">
    <table class="table table-striped table-bordered table-secondary" style="font-family: Arial, sans-serif;">
      <tr>
        <td>NIK</td>
        <td><input type="text" name="nik" placeholder="NIK" class="form-control"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" placeholder="Nama lengkap" class="form-control"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" placeholder="Alamat" class="form-control"></td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td>
          <select name="id_kabupaten" class="form-select" onchange="getKecamatan(this.value)">
            <option value="">Pilih Kabupaten</option>
            <?php
            $kab = mysqli_query($connect, "SELECT * FROM kab");
            while ($kabu = mysqli_fetch_assoc($kab)) {
              echo "<option value='" . $kabu['id_kabupaten'] . "'>" . $kabu['nama_kabupaten'] . "</option>";
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td>
          <select name="id_kecamatan" id="id_kecamatan" class="form-select">
            <option value="">Pilih Kabupaten terlebih dahulu</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Golongan Darah</td>
        <td><input type="text" name="golongan_darah" placeholder="Golongan Darah" class="form-control"></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td>
          <select name="id_pekerjaan" class="form-select">
            <?php
            $pek = mysqli_query($connect, "SELECT * FROM pekerjaan");
            while ($peke = mysqli_fetch_assoc($pek)) {
              echo "<option value='" . $peke['id_pekerjaan'] . "'>" . $peke['nama_pekerjaan'] . "</option>";
            }
            ?>
          </select>
        </td>
      </tr>
    </table>

    <div class="text">
      <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
      <a href="index.php" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
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

  function getKecamatan(id_kabupaten) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("id_kecamatan").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "get_kecamatan.php?id_kabupaten=" + id_kabupaten, true);
    xhttp.send();
  }
</script>

<?php include 'footer.php'?>
