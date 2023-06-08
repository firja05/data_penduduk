<?php include 'header.php';

$id = $_GET['id'];
$query = mysqli_query($connect,"select * from pengguna where id='$id'");
$pengguna = mysqli_fetch_array($query);
//print_r($pengguna);?>

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
<?php include 'footer.php'?>
