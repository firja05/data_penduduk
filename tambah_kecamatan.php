<?php include 'header.php'?>

<div class="container mt-5">
<h3>Tambah Kecamatan</h3>
<form action="simpan_kecamatan.php" method="post">
    <table class="table table-striped table-bordered table-secondary" style="font-family: Arial, sans-serif;">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_kecamatan" placeholder="ID" class="form-control"></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td><input type="text" name="nama_kecamatan" placeholder="Kecamatan" class="form-control"></td>
            </tr>
        </table>
        <div class="text">
      <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
      <a href="kecamatan.php" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
  </form>
</div>

<?php include 'footer.php'?>
