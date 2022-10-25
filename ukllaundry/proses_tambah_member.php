<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $provinsi=$_POST['provinsi'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telepon=$_POST['tlp'];

    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, provinsi, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$provinsi."','".$jenis_kelamin."','".$telepon."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan data');location.href='tambah_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data');location.href='tambah_member.php';</script>";
        }
    }
}
?>
