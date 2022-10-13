<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form method="post" action="#">
        <input name="id" type="hidden">
        <p><label>NIS</label> : </label><input name="nis" type="text"></p>
        <p><label>Nama Siswa</label> : </label><input name="nm_siswa" type="text"></p>
        <p><label>Tempat Lahir</label> : </label><input name="tmplahir" type="text"></p>
        <p><label>Tanggal Lahir: </label><input name="tgl_lahir" type="text"></p>
        <p><label>Jenis Kelas: </label><input name="jkel" type="text"></p>
        <p><label>Alamat: </label><input name="alamat" type="text"></p>
        <p><label>Telepon: </label><input name="tlp" type="text"></p>
        <p><label>Nama Wali: </label><input name="nm_wali" type="text"></p>
        <p><label>Kode Kelas: </label><input name="kd_kelas" type="text"></p>
        <p><label>User Name: </label><input name="user_name" type="text"></p>
        <p><label>Password: </label><input name="password" type="text"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>


    <?php
    include('../validasi.php');
    include('class_siswa.php');
    $siswa=new class_siswa;
    if(isset($_POST['simpan'])){
        $siswa->add_data($_POST['id'],$_POST['nis'],$_POST['nm_siswa'],$_POST['tmplahir'],$_POST['tgl_lahir'],$_POST['jkel'],$_POST['alamat'],$_POST['tlp'],$_POST['nm_wali'],$_POST['kd_kelas'],$_POST['user_name'],$_POST['password']);
        header('location:index.php');

    }

    ?>
</body>
</html>