<?php
if($_POST){
    $id_paket=$_POST['id'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];

    if(empty($jenis)){
        echo "<script>alert('jenis tidak boleh kosong');location.href='ubah_paket.php';</script>";
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update paket set jenis='".$jenis."', harga='".$harga."' where id = '".$id_paket."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update data');location.href='ubah_paket.php?id=".$id_paket."';</script>";
            }
        
    } 
}
?>
