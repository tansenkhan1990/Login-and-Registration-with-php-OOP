<?php
class Crud{
    public $conn;
    public function __construct()
    {
        $this->conn=new mysqli('localhost','root','','login_regitration');


    }

   public function insert($name,$email,$password,$address,$mobile)
   {
       $sql = "INSERT INTO info (name, email,password,address,mobile)
VALUES ('$name','$email','$password','$address','$mobile')";
       if ($this->conn->query($sql) === TRUE) {
           return true;
       } else {
           return false;
       }
   }
}
$obj=new Crud();
//$obj->insert('tansen','tansenkhan1990@gmail.com','bonn','bonn','0152');
?>