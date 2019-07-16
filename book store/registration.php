<?php


session_start();

header ('location:login.php');
$con=mysqli_connect('localhost','root');
if($con)
{
    echo "connection successful";

    echo '<br>';
    
}
else
{
    echo "try again";
}

mysqli_select_db($con,"signup");


$user = $_GET['name'];
$phone=$_GET['contact'];
$mail=$_GET['email'];
$pass=$_GET['password'];



$query="select * from registration where name = '$user'  && password = '$pass' ";


$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);

if($num==1)
{
    echo "User Already Exist...!";
}
else
{
    $q="insert into registration(name,contact,email,password) values('$user','$phone','$mail','$pass')";

    mysqli_query($con,$q);


}


?>