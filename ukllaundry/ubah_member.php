<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_member=mysqli_query($conn,"select * from member where 
    id = '".$_GET['id']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah Data</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id" value= 
  "<?=$dt_member['id']?>">
        Nama : 
        <input type="text" name="nama" value=   "<?=$dt_member['nama']?>" class="form-control">
        Alamat : 
        <input type="text" name="alamat" value="<?=$dt_member['alamat']?>" class="form-control">
        Provinsi : 
        <input type="text" name="provinsi" value=   "<?=$dt_member['provinsi']?>" class="form-control">
        Jenis Kelamin : 
        <?php 
        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_member['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
        <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        Telepon : 
        <input type="text" name="tlp" value="" class="form-control">

<input type="submit" name="simpan" value="Ubah Data" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
