<?php include 'header.php'?>

<div class="container mt-5">
<h3>Tambah Data Pengguna</h3>
<form action="simpan_pengguna.php" method="post">
    <table class="table table-striped table-bordered table-secondary" style="font-family: Arial, sans-serif;">
        <tr>
                <td>ID</td>
                <td><input type="text" name="id" placeholder="ID" class="form-control"></td>
            </tr>  
          <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="usernama" placeholder="Username" class="form-control"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="text" name="password" placeholder="Password" class="form-control"></td>
          </tr>
        </table>
                <div class="text">
      <button type="submit" class="btn btn-success"><i class="bi bi-folder-check"></i> Simpan Data</button>
      <a href="list_pengguna.php" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
  </form>
</div>
<?php include 'footer.php'?>
