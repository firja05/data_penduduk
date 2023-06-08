<?php include 'header.php'?> 
      
<div class="container my-5">
        <h1 class="text-center mb-4">Data Kabupaten</h1>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="tambah_kabupaten.php" class="btn btn-secondary ">
            <i class="bi bi-plus-square"></i> 
            Tambah Kabupaten
        </a>
        </div>

        <div class="table-responsive">
        <table class="table table-bordered table-striped table-secondary"style="font-family: Arial, sans-serif;">
            <thead class="table-dark">
            <tr>
                <th scope="col" width="30">ID</th>
                <th scope="col">Kabupaten</th>
                <th scope="col" width="140">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $kab = mysqli_query($connect, "SELECT * FROM kab") ;
            while($row=mysqli_fetch_array($kab)){
            ?>
            <tr>
                <td><?php echo $row['id_kabupaten']?></td>
                <td><?php echo $row['nama_kabupaten']?></td>
            <td>
                        <a href="edit_kabupaten.php?id_kabupaten=<?php echo $row['id_kabupaten'];?>" class="btn btn-info">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="delete_kabupaten.php?id_kabupaten=<?php echo $row['id_kabupaten'];?>" class="btn btn-danger">
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

    <?php include 'footer.php'?>
