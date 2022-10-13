<?php
 include("class_siswa.php");
 $data=new class_siswa;
 $id=$_GET['id'];
 $data->delete_siswa($id);
header('location:index.php');
?>