<?php
if($_POST){
    $id_user=$_POST['id'];
    $nama_user=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    if(empty($nama_user)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_user.php';</script>";
 
    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update user set nama='".$nama_user."', username='".$username."', password='".md5($password)."', role='".$role."' where id = '".$id_user."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update data');location.href='ubah_user.php?id=".$id_user."';</script>";
            }
        
    } 
}
?>
