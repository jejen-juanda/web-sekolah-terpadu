<?php
 include("class_admin.php");
 $data=new class_admin;
 $id=$_GET['id'];
 $data->delete_admin($id);
header('location:index.php');
?>