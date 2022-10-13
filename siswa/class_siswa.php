<?php
include('../koneksi.php');
class class_siswa{
        public $con;
        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;
        }

        function getAll(){
            $data=$this->con->query("select * from siswa");
            return $data;
        }

        function add_data($id,$nis,$nm_siswa,$tmplahir,$tgl_lahir,$jkel,$alamat,$tlp,$nm_wali,$kd_kelas,$user_name,$password){
            $this->con->query("insert into siswa(id,nis,nm_siswa,tmplahir,tgl_lahir,jkel,alamat,tlp,nm_wali,kd_kelas,user_name,password) values('$id','$nis','$nm_siswa','$tmplahir','$tgl_lahir','$jkel','$alamat','$tlp','$nm_wali','$kd_kelas','$user_name','$password')");
            return true;
        }

         function delete_siswa($id){
            $this->con->query("delete from siswa where id='$id'");
            return true;
        }

        function getSiswaByID($id){
            $data=$this->con->query("select * from siswa where id='$id'");
            return $data;
        }

        function edit_data($id,$nis,$nm_siswa,$tmplahir,$tgl_lahir,$jkel,$alamat,$tlp,$nm_wali,$kd_kelas,$user_name,$password){
            $this->con->query("UPDATE siswa SET id= '$id', nis= '$nis', nm_siswa= '$nm_siswa', tmplahir= '$tmplahir', tgl_lahir= '$tgl_lahir', jkel= '$jkel', alamat= '$alamat', tlp= '$tlp', nm_wali= '$nm_wali', kd_kelas= '$kd_kelas', user_name= '$user_name', password= '$password' WHERE nis='$nis'");
            return true;
        }

}
?>