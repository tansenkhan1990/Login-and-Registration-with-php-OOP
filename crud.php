<?php
class Crud{
    public $conn;
    public function __construct()
    {
        $this->conn=new mysqli('localhost','root','','login_regitration');


    }

    public function insert($name,$email,$password,$address,$mobile)
    {

    }
}
$obj=new Crud();
?>