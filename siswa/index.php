<?php
include('class_siswa.php');

$siswa=new class_siswa;
$data=$siswa->getAll();

?>

<html>
    <head>
<title>Web Universitas Terpadu</title>
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
        <h1>Data siswa</h1>
     
        <p><a href="tambah.php"><button>Tambah</button></a></p>
        <table style="border:1px solid ;">
            <tr>
                <th>No</th>
                <th>nis</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelas</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Nama Wali</th>
                <th>Kode Kelas</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no=0;
            while($rec=$data->fetch_array()){
                $no++;?>

                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['nis'];?></td>
                    <td><?php echo $rec['nm_siswa'];?></td>
                    <td><?php echo $rec['tmplahir'];?></td>
                    <td><?php echo $rec['tgl_lahir'];?></td>
                    <td><?php echo $rec['jkel'];?></td>
                    <td><?php echo $rec['alamat'];?></td>
                    <td><?php echo $rec['tlp'];?></td>
                    <td><?php echo $rec['nm_wali'];?></td>
                    <td><?php echo $rec['kd_kelas'];?></td>
                    <td><?php echo $rec['user_name'];?></td>
                    <td><?php echo $rec['password'];?></td>
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