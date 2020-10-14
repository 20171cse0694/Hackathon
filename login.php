<?php

$email=$_POST['Email_id'];
$Password=$_POST['Password'];


//database connection
$conn=new mysqli('localhost','root','','Login');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}
else
{
$stmt=$conn->prepare("insert into Login(Email_id,Password)values(?,?)");
$stmt->bind_param("ss",$email,$Password);
$stmt->execute();
echo "Login success...";
$stmt->close();
$conn->close();


?>


