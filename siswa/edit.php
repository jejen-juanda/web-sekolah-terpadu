<?php
  include('../validasi.php');
  include('class_siswa.php');

  $siswa=new class_siswa;
  $data=$siswa->getSiswaByID($_GET['id']);
  $data_edit=$data->fetch_assoc();
?>
<html>
<head>
<title>Web Sekolah Terpadu</title>
</head>
<body>
    <h1>Edit siswa</h1>
    <form method="post" action="#">
        <input name="id" type="hidden" value="<?php echo $data_edit['id'];?>">
        <p><label>NIS</label> : </label><input name="nis" type="text" value="<?php echo $data_edit['nis'];?>"></p>
        <p><label>Nama Siswa</label> : </label><input name="nm_siswa" type="text" value="<?php echo $data_edit['nm_siswa'];?>"></p>
        <p><label>Tempat Lahir</label> : </label><input name="tmplahir" type="text" value="<?php echo $data_edit['tmplahir'];?>"></p>
        <p><label>Tanggal Lahir: </label><input name="tgl_lahir" type="text" value="<?php echo $data_edit['tgl_lahir'];?>"></p>
        <p><label>Jenis Kelas: </label><input name="jkel" type="text" value="<?php echo $data_edit['jkel'];?>"></p>
        <p><label>Alamat: </label><input name="alamat" type="text" value="<?php echo $data_edit['alamat'];?>"></p>
        <p><label>Telepon: </label><input name="tlp" type="text" value="<?php echo $data_edit['tlp'];?>"></p>
        <p><label>Nama Wali: </label><input name="nm_wali" type="text" value="<?php echo $data_edit['nm_wali'];?>"></p>
        <p><label>Kode Kelas: </label><input name="kd_kelas" type="text" value="<?php echo $data_edit['kd_kelas'];?>"></p>
        <p><label>User Name: </label><input name="user_name" type="text" value="<?php echo $data_edit['user_name'];?>"></p>
        <p><label>Password: </label><input name="password" type="text" value="<?php echo $data_edit['password'];?>"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>


    <?php
  
    if(isset($_POST['simpan'])){

        $siswa->edit_data($_POST['id'],$_POST['nis'],$_POST['nm_siswa'],$_POST['tmplahir'],$_POST['tgl_lahir'],$_POST['jkel'],$_POST['alamat'],$_POST['tlp'],$_POST['nm_wali'],$_POST['kd_kelas'],$_POST['user_name'],$_POST['password']);
        header('location:index.php');

    }

    ?>
</body>
</html>