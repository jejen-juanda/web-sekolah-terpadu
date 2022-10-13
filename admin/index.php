<?php
include('class_admin.php');
$admin=new class_admin;
$data=$admin->getAll();
?>
<html>
    <head>
<title>Web Sekolah Terpadu</title>
    <style>
        table, td, th {
            border: 1px solid;
            }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Data Admin</h1>
        <p><a href="tambah.php"><button>Tambah</button></a></p>
        <table style="border:1px solid ;">
            <tr>
                <th>No</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no=0;
            while($rec=$data->fetch_array()){
                $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['user_name'];?></td>
                    <td><?php echo $rec['password'];?></td>
                    <td><?php echo $rec['nama'];?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $rec['id'];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $rec['id'];?>">hapus</a>
                </td>
                </tr>
<?php
            }
            ?>
        </table>
    </body>
</html>