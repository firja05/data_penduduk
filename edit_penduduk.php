<?php include 'header.php';

$nik = $_GET['nik'];
$query = mysqli_query($connect,"select * from penduduk where nik='$nik'");
$penduduk = mysqli_fetch_array($query);
//print_r($pengguna);?>
<div class="container mt-5">
<h3>Edit Data Penduduk</h3>
<form action="update_penduduk.php" method="post">
<tr>
                <td></td>
                <td><input type="hidden" name="nik" value="<?php echo $penduduk['nik']?>" placeholder="NIK" class="form-control"></td>
            </tr>
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
            <td><select name="id_kabupaten" class="form-select">
                        <?php
                        $kab = mysqli_query($connect, "select * from kab");
                        while ($kabu = mysqli_fetch_array($kab)) {
                            echo "<option value='".$kabu['id_kabupaten']."'";
                            echo $kabu['id_kabupaten']==$penduduk['id_kabupaten']?"selected":"";
                            echo ">".$kabu['nama_kabupaten']."</option>";
                        }
                        ?>
                        </select></td>
            </tr>
            <td>Kecamatan</td>
            <td><select name="id_kecamatan" class="form-select">
                        <?php
                        $kec = mysqli_query($connect, "select * from kec");
                        while ($keca = mysqli_fetch_array($kec)) {
                            echo "<option value='".$keca['id_kecamatan']."'";
                            echo $keca['id_kecamatan']==$penduduk['id_kecamatan']?"selected":"";
                            echo ">".$keca['nama_kecamatan']."</option>";
                        }
                        ?>
                        </select></td>
            </tr>
          <td>Golongan Darah</td>
              <td><input type="text" name="golongan_darah" value="<?php echo $penduduk['golongan_darah']?>" placeholder="Password" class="form-control"></td>
          </tr>
          <td>Pekerjaan</td>
          <td><select name="id_pekerjaan" class="form-select">
                        <?php
                        $pek = mysqli_query($connect, "select * from pekerjaan");
                        while ($peke = mysqli_fetch_array($pek)) {
                            echo "<option value='".$peke['id_pekerjaan']."'";
                            echo $peke['id_pekerjaan']==$penduduk['id_pekerjaan']?"selected":"";
                            echo ">".$peke['nama_pekerjaan']."</option>";
                        }
                        ?>
                        </select></td>
            </tr>
        </table> 
        <div class="text">
      <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
      <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
    </div>
  </form>
</div>
<?php include 'footer.php'?>
