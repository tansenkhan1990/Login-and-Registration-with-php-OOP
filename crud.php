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

       $sql = "INSERT INTO info (name, email,password,mobile)
VALUES ('$name','$email','$password','$mobile')";

       $this->conn->query($sql);
       $check2="select * from info";
       $this->conn->query($check2);
       $b=mysqli_affected_rows($this->conn);
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

?>
