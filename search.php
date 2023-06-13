<?php
include 'koneksi.php';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $penduduk = mysqli_query($connect, "SELECT p.*, k.nama_kabupaten, c.nama_kecamatan, d.nama_pekerjaan FROM penduduk AS p JOIN kab AS k ON p.id_kabupaten = k.id_kabupaten JOIN kec AS c ON p.id_kecamatan = c.id_kecamatan JOIN pekerjaan AS d ON p.id_pekerjaan = d.id_pekerjaan WHERE p.nik LIKE '%$keyword%' OR p.nama LIKE '%$keyword%' OR p.alamat LIKE '%$keyword%' OR p.golongan_darah LIKE '%$keyword%' OR k.nama_kabupaten LIKE '%$keyword%' OR c.nama_kecamatan LIKE '%$keyword%' OR d.nama_pekerjaan LIKE '%$keyword%'");
} else {
    // Jika parameter 'keyword' tidak ada, kembali ke halaman sebelumnya
    header("Location: index.php");
    exit();
}
?>

<?php include 'header.php' ?> 

<div class="container my-5">
    <h1 class="text-center mb-4">Hasil Pencarian</h1>

    <a href="index.php" class="btn btn-secondary mb-3">Kembali</a>

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
                            <a href="delete_penduduk.php?nik=<?php echo $row['nik']; ?>" class="btn btn-danger">
                            <i class="bi bi-trash-fill"></i>
                            </a>
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
<?php include 'footer.php'?>
