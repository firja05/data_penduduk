<?php include 'header.php'?>

<div class="container mt-5">
  <h3>Tanbah Data Penduduk</h3>
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
          <select name="id_kabupaten" class="form-select">
            <?php
            $kab = mysqli_query($connect,"select * from kab");
            while ($kabu = mysqli_fetch_array($kab)) {
              echo "<option value='".$kabu['id_kabupaten']."'>".$kabu['nama_kabupaten']."</option>";
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
            $kec = mysqli_query($connect,"select * from kec");
            while ($keca = mysqli_fetch_array($kec)) {
              echo "<option value='".$keca['id_kecamatan']."'>".$keca['nama_kecamatan']."</option>";
            }
            ?>
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
            $pek = mysqli_query($connect,"select * from pekerjaan");
            while ($peke = mysqli_fetch_array($pek)) {
              echo "<option value='".$peke['id_pekerjaan']."'>".$peke['nama_pekerjaan']."</option>";
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

<?php include 'footer.php'?>
