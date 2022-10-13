<?php
class koneksi{
    public $con;
    function __construct(){
        $this->con=new mysqli("localhost","root","","db_ujikom29101122_jejen");
    }
    function validasi_login($username,$password){
        $data=$this->con->query("select * from admin where user_name='$username' and password='$password'");
        return $data;
    }
        function getAll(){
            $data=$this->con->query("select * from admin");
            return $data;
        }
        function add_data($id,$user_name,$password,$nama){
            $this->con->query("insert into admin(id,user_name,password,nama) values('$id','$user_name','$password','$nama')");
            return true;
        }
}
?>