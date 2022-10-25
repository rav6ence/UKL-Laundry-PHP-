<?php
$conn=mysqli_connect('localhost','root','','laundry');

if(mysqli_connect_errno()) {
    printf("GAGAL <br>",mysqli_connect_error());
    exit();
}
?>