<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include "koneksi.php";
        include "navbar.php";
        $qry_get_buku = mysqli_query($koneksi, "select* from buku where id_buku = '".$_GET['id_buku']."'");
        $dt_buku=mysqli_fetch_array($qry_get_buku);
    ?>
        <div class="card" style="margin: 20px;">
        <div class="card-header"><h1>Ubah Buku</h1></div>
        <div class="card-body">
        <form action="proses_ubah_buku.php" method="POST" enctype="multipart/form-data">
        <input type = "hidden" name="id_buku" value ="<?=$dt_buku['id_buku']?>">
        <div class="mb-2">
            <label class="form-label">Nama Buku : </label>
                <input type="text" name="nama_buku" value="<?= $dt_buku['nama_buku'] ?>" class="form-control" required> 
            </div>
        <div class="mb-2">
            <label class="form-label">Pengarang : </label>
                <input type="text" name="pengarang" value="<?= $dt_buku['pengarang'] ?>" class="form-control" required> 
            </div>
        <div class="mb-2">
            <label class="form-label">Deskripsi : </label>
                <input type="text" name="deskripsi" value="<?= $dt_buku['deskripsi'] ?>" class="form-control" required> 
            </div>
        
            Foto : 
        <?php echo $dt_buku['foto']?>
        <br><img src="foto/<?php echo $dt_buku['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;"></br>
          <br><br><br><input type="file" name="foto" class="form-control"/></br>
          <i style="float: left;font-size: 11px;color: light">Abaikan jika tidak merubah gambar produk</i>
          
        <br><button type="submit" class="btn btn-primary">Submit</button>
        </br>
    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
</body>
</html>