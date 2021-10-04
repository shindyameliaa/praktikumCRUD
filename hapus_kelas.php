<?php
    if($_GET['id_kelas']){
        include "koneksi.php";
        $query_hapus=mysqli_query($koneksi,"DELETE FROM kelas where id_kelas='".$_GET['id_kelas']."'");
    if($query_hapus){
        echo "<script>alert('Sukses Hapus Kelas');location.href='tampil_kelas.php';</script>";
    } else {
        echo "<script>alert('Gagal Hapus Kelas');location.href='tampil_kelas.php';</script>";
        }
    } 
?>