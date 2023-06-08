<?php include 'header.php';

$id_kecamatan = $_GET['id_kecamatan'];
$query = mysqli_query($connect,"select * from kec where id_kecamatan='$id_kecamatan'");
$kec = mysqli_fetch_array($query);
//print_r($pengguna);?>
<div class="container mt-5">
<h3>Edit Data Kecamatan</h3>
<form action="update_kecamatan.php" method="post">
<tr>
                <td></td>
                <td><input type="hidden" name="id_kecamatan" value="<?php echo $kec['id_kecamatan']?>" placeholder="ID" class="form-control"></td>
            </tr>  
<table class="table table-striped table-bordered table-secondary" style="font-family: Arial, sans-serif;">
          <tr>
                <td>Kecamatan</td>
                <td><input type="text" name="nama_kecamatan" value="<?php echo $kec['nama_kecamatan']?>" placeholder="Kecamatan" class="form-control"></td>
            </tr>
        </table> 
        <div class="text">
      <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
      <a href="kecamatan.php" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
        </div>
    </from>
</div>
<?php include 'footer.php'?>
