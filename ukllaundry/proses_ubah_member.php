<?php
if($_POST){
    $id_member=$_POST['id'];
    $nama_member=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $provinsi=$_POST['provinsi'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telepon=$_POST['tlp'];
    if(empty($nama_member)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_member.php';</script>";
 
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update member set nama='".$nama_member."',alamat='".$alamat."', provinsi='".$provinsi."', jenis_kelamin='".$jenis_kelamin."', tlp='".$telepon."' where id = '".$id_member."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update data');location.href='ubah_member.php?id=".$id_member."';</script>";
            }
        
    } 
}
?>
