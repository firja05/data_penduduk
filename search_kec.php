<?php
include 'koneksi.php'; // Menghubungkan dengan file koneksi.php

// Mengecek apakah parameter 'keyword' ada dalam URL
if (isset($_GET['keyword'])) {
    // Mengambil nilai keyword dari URL
    $keyword = $_GET['keyword'];

    // Membuat query untuk mencari kecamatan berdasarkan keyword
    $query = "SELECT * FROM kec WHERE nama_kecamatan LIKE '%$keyword%'";
    $result = mysqli_query($connect, $query);
?>
    <?php include 'header.php'; ?>

    <div class="container my-5">
        <h1 class="text-center mb-4">Hasil Pencarian</h1>

        <a href="kecamatan.php" class="btn btn-secondary mb-3">Kembali</a>

        <?php
        // Mengecek apakah ada hasil dari pencarian
        if (mysqli_num_rows($result) > 0) {
        ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-secondary" style="font-family: Arial, sans-serif;">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" width="30">ID</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col" width="140">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id_kecamatan'] ?></td>
                                <td><?php echo $row['nama_kecamatan'] ?></td>
                                <td>
                                    <a href="edit_kecamatan.php?id_kecamatan=<?php echo $row['id_kecamatan']; ?>" class="btn btn-info">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="delete_kecamatan.php?id_kecamatan=<?php echo $row['id_kecamatan']; ?>" class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php
        } else {
            // Jika tidak ada hasil dari pencarian
        ?>
            <div class="alert alert-info text-center" role="alert">
                Tidak ditemukan kecamatan dengan kata kunci '<?php echo $keyword ?>'.
            </div>
        <?php
        }
        ?>
    </div>

<?php
} else {
    // Jika parameter 'keyword' tidak ada dalam URL, redirect ke halaman sebelumnya
    header("Location: index.php");
    exit();
}

include 'footer.php'; // Menambahkan footer pada halaman
?>
