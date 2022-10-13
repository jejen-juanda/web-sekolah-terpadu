<?php
  include('../validasi.php');
  include('class_admin.php');

  $admin=new class_admin;
  $data=$admin->getAdminByID($_GET['id']);
  $data_edit=$data->fetch_assoc();
?>
<html>
<head>
<title>Web Sekolah Terpadu</title>
</head>

<body>
    <h1>Edit Admin</h1>
    <form method="post" action="#">
        <input name="id" type="hidden" value="<?php echo $data_edit['id'];?>">
        <p><label>User Name</label> : </label><input name="user_name" type="text" value="<?php echo $data_edit['user_name'];?>"></p>
        <p><label>Password</label> : </label><input name="password" type="text" value="<?php echo $data_edit['password'];?>"></p>
        <p><label>nama: </label><input name="nama" type="text" value="<?php echo $data_edit['nama'];?>"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>

    <?php
  
    if(isset($_POST['simpan'])){
        $admin->edit_data($_POST['id'],$_POST['user_name'],$_POST['password'],$_POST['nama']);
        header('location:index.php');

    }

    ?>
</body>
</html>