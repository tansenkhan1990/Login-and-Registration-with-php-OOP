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
           echo "New record created successfully";
       } else {
           echo "failed";
       }
   }
}
$obj=new Crud();
$obj->insert('tansen','tansenkhan1990@gmail.com','bonn','bonn','0152');
?>