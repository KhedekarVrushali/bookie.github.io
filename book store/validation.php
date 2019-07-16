<?php


session_start();


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


$user = $_POST['name'];
$phone=$_POST['contact'];
$mail=$_POST['email'];
$pass=$_POST['password'];



$query="select * from registration where name = '$user'  && password = '$pass' ";


$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);

if($num==1)
{
   $_SESSION['name']=$user;
   header('location:booksDetails.php');
}
else
{
    header('location:login.php');


}


?>