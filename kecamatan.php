<?php include 'header.php'?> 

<div class="container my-5">
        <h1 class="text-center mb-4">Data Kecamatan</h1>
        <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="tambah_kecamatan.php" class="btn btn-secondary">
        <i class="bi bi-plus-square"></i> 
        Tambah Kecamatan
        </a>
        </div>

        <div class="table-responsive">
        <table class="table table-bordered table-striped table-secondary"style="font-family: Arial, sans-serif;">
            <thead class="table-dark">
            <tr>
                <th scope="col" width="30">ID</th>
                <th scope="col">Kecamatan</th>
                <th scope="col" width="140">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $kec = mysqli_query($connect, "select * from kec") ;
            while($row=mysqli_fetch_array($kec)){
            ?>
            <tr>
                <td><?php echo $row['id_kecamatan']?></td>
                <td><?php echo $row['nama_kecamatan']?></td>
                <td>
                        <a href="edit_kecamatan.php?id_kecamatan=<?php echo $row['id_kecamatan'];?>" class="btn btn-info">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="delete_kecamatan.php?id_kecamatan=<?php echo $row['id_kecamatan'];?>" class="btn btn-danger">
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