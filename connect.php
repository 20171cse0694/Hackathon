<?php
$firstName=$_POST['First Name'];
$lastName=$_POST['Last Name'];
$email=$_POST['Email_id'];
$Password=$_POST['Password'];
$Conf.Pwd=$_POST['Conf.Pwd'];
$DOB=$_POST['DOB'];
$gender=$_POST['gender'];

//database connection
$conn=new mysqli('localhost','root','','sign Up');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}
else
{
$stmt=$conn->prepare("insert into sign up(First Name,Last Name,Email_id,Password,Conf.Pwd,DOB,gender)values(?,?,?,?,?,?,?)");
$stmt->bind_param("sssssis",$firstName,$lastName,$email,$Password,$Conf.Pwd,$DOB,$gender);
$stmt->execute();
echo "Sign Up success...";
$stmt->close();
$conn->close();


?>


