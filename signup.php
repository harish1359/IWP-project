<?php
$conn=mysqli_connect("localhost","root","","login");
$name=$_POST["nameof"];
$gender=$_POST["gender"];
$mobile=$_POST["mobileno"];
$user=$_POST["username"];
$pass=$_POST["password"];
$mail=$_POST["mail"];

//echo $name;
$sqluser="select * from trial where username='$user'";
$sqlmail="select * from trial where mail='$mail'";
$resultuser=mysqli_query($conn,$sqluser);
$resultmail=mysqli_query($conn,$sqlmail);
if (mysqli_num_rows($resultuser) > 0)
{
echo'<script>alert("Sorry,Username already taken....Try another ");</script>';
echo "<script>window.open('signup.html','_self')</script>";
}
else if (mysqli_num_rows($resultmail) > 0)
{
echo'<script>alert("Sorry,This mail is already  registered..Try another ");</script>';
echo "<script>window.open('signup.html','_self')</script>";
}
else
{
$sql="insert into trial values('$user','$pass','$name','$mobile','$gender','$mail')";
mysqli_query($conn,$sql);
echo '<script>alert("Signup successful\nLogin now");</script>';
echo "<script>window.open('login.html','_self')</script>";
}
?>