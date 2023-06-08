<?php include 'header.php';

$id_kabupaten = $_GET['id_kabupaten'];
$query = mysqli_query($connect,"select * from kab where id_kabupaten='$id_kabupaten'");
$kab = mysqli_fetch_array($query);
//print_r($pengguna);?>
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
<?php include 'footer.php'?>
