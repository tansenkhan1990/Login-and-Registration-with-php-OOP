<?php
class Crud{
    public $conn;
    public function __construct()
    {
        $this->conn=new mysqli('localhost','root','','login_regitration');


    }

   public function insert($name,$email,$password,$mobile)
   {
       $sql = "INSERT INTO info (name, email,password,mobile)
VALUES ('$name','$email','$password','$mobile')";
       if ($this->conn->query($sql) === TRUE) {
           //echo 'insert';
           return true;
       } else {
           return false;
       }
   }
}
$obj=new Crud();
//$obj->insert('tansen','tansenkhan1990@gmail.com','bonn','0152');
?>
