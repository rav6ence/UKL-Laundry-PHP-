<?php 
    if($_GET['id']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from paket where id='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus data');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data');location.href='tampil_paket.php';</script>";
        }
    }
?>
