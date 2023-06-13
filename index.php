<?php include 'header.php' ?>

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
 
<?php if (isset($_GET['status'])) : ?>
  <?php if ($_GET['status'] === 'berhasil') : ?>
    <div id="success-alert" class="alert alert-danger" role="alert">
      <i class="bi bi-trash-fill"></i> Data Berhasil Dihapus!
    </div>
  <?php elseif ($_GET['status'] === 'gagal') : ?>
    <div id="error-alert" class="alert alert-danger" role="alert">
      Data Gagal Dihapus!
    </div>
  <?php endif; ?>
<?php endif; ?>

<div class="container my-5">
  <h1 class="text-center mb-4">Data Penduduk</h1>
  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="tambah_penduduk.php" class="btn btn-secondary">
      <i class="bi bi-person-plus-fill"></i>
      Tambah Penduduk
    </a>
    <form class="d-flex" role="search" method="get" action="search.php">
      <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped table-secondary" style="font-family: Arial, sans-serif;">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>    
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">Kabupaten/Kota</th>
          <th scope="col">Kecamatan</th>
          <th scope="col">Alamat</th>
          <th scope="col">Golongan Darah</th>
          <th scope="col">Pekerjan</th>
          <th scope="col" width="140">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $nomor = 1;
        // Cek apakah ada parameter 'keyword' dari form pencarian
        if (isset($_GET['keyword'])) {
          $keyword = $_GET['keyword'];
          // Query dengan kondisi pencarian
          $penduduk = mysqli_query($connect, "SELECT p.*, k.nama_kabupaten, c.nama_kecamatan, d.nama_pekerjaan FROM penduduk AS p JOIN kab AS k ON p.id_kabupaten = k.id_kabupaten JOIN kec AS c ON p.id_kecamatan = c.id_kecamatan JOIN pekerjaan AS d ON p.id_pekerjaan = d.id_pekerjaan WHERE p.nik LIKE '%$keyword%' OR p.nama LIKE '%$keyword%' OR p.alamat LIKE '%$keyword%' OR p.golongan_darah LIKE '%$keyword%' OR k.nama_kabupaten LIKE '%$keyword%' OR c.nama_kecamatan LIKE '%$keyword%' OR d.nama_pekerjaan LIKE '%$keyword%'");
        } else {
          // Query tanpa kondisi pencarian
          $penduduk = mysqli_query($connect, "SELECT p.*, k.nama_kabupaten, c.nama_kecamatan, d.nama_pekerjaan FROM penduduk AS p JOIN kab AS k ON p.id_kabupaten = k.id_kabupaten JOIN kec AS c ON p.id_kecamatan = c.id_kecamatan JOIN pekerjaan AS d ON p.id_pekerjaan = d.id_pekerjaan");
        }
        while ($row = mysqli_fetch_array($penduduk)) {
        ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $row['nik']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['nama_kabupaten']; ?></td>
            <td><?php echo $row['nama_kecamatan']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['golongan_darah']; ?></td>
            <td><?php echo $row['nama_pekerjaan']; ?></td>
            <td>
              <a href="edit_penduduk.php?nik=<?php echo $row['nik']; ?>" class="btn btn-info">
                <i class="bi bi-person-fill-gear"></i>  
              </a>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['nik']; ?>">
                <i class="bi bi-trash-fill"></i>
              </button>
              <div class="modal fade" id="deleteModal<?php echo $row['nik']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hapus Data Penduduk</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apakah Anda yakin ingin menghapus data penduduk dengan nama: <?php echo $row['nama']; ?>?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <a href="delete_penduduk.php?nik=<?php echo $row['nik']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php
          $nomor++;
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php include 'footer.php' ?>
