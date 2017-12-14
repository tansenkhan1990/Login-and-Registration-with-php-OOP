<?php
class Crud{
    public $conn;
    public function __construct()
    {
        $this->conn=new mysqli('localhost','root','','login_regitration');


    }

   public function insert($name,$email,$password,$mobile)
   {
       $check="select * from info";
       $this->conn->query($check);
       $a=mysqli_affected_rows($this->conn);
       echo $a."<br>";
       $sql = "INSERT INTO info (name, email,password,mobile)
VALUES ('$name','$email','$password','$mobile')";

       $this->conn->query($sql);
       $check2="select * from info";
       $this->conn->query($check2);
       if($a==$b)
       {
           return false;
       }
       else{
           return true;
       }
   }
}
$obj=new Crud();
$obj->insert('tansen','tansenkhan1990@gmail.com','bonn','0152');
?>
