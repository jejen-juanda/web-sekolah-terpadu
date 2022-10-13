<?php
include('../koneksi.php');
class class_admin{
        public $con;
        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;
        }

        function getAll(){
            $data=$this->con->query("select * from admin");
            return $data;
        }

        function add_data($id,$user_name,$password,$nama){
            $this->con->query("insert into admin(id,user_name,password,nama) values('$id','$user_name','$password','$nama')");
            return true;
        }
         function delete_admin($id){
            $this->con->query("delete from admin where id='$id'");
            return true;
        }

        function getAdminByID($id){
            $data=$this->con->query("select * from admin where id='$id'");
            return $data;
        }

        function edit_data($id,$user_name,$password,$nama){
            $this->con->query("UPDATE admin SET id= '$id', user_name= '$user_name', password= '$password', nama= '$nama' WHERE user_name='$user_name'");
            return true;
        }

}
?>