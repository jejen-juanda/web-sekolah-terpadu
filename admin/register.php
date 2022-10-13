<html>
<head>
<title>Web Sekolah Terpadu</title>
</head>
<body>
    <h1>Daftar Akun</h1>
    <form method="post" action="#">
        <input name="id" type="hidden">
        <p><label>User name: </label><input name="user_name" type="text"></p>
        <p><label>Password</label> : </label><input name="password" type="text"></p>
        <p><label>Nama: </label><input name="nama" type="text"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>
    <?php
    include('class_admin.php');

    $admin=new class_admin;

    if(isset($_POST['simpan'])){
        $admin->add_data($_POST['id'],$_POST['user_name'],$_POST['password'],$_POST['nama']);
        header('location:../index.php');

    }

    ?>
</body>
</html>