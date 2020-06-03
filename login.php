<?php
$username=$_POST['username'];
$password=$_POST['password'];
$conn=new mysqli("localhost","root","","login");

//query for databse for user
$result=mysqli_query($conn,"select * from trial where username= '$username' and password='$password' ");
if (mysqli_num_rows($result)> 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    //echo "Username: " . $row["username"]. " Password: " . $row["password"]. "<br>";
    //echo "<p>".$row["username"]."<br>";
    $cal=mysqli_query($conn,"update activa set count=1,username='$username',password='$password'");
	 echo $cal;    
    $link= "<script>window.open('base2.html','_self')</script>";
    echo $link;
}
else {
    echo '<script>alert("User not found")</script>';
    echo "<script>window.open('login.html','_self')</script>";
}

echo "Great work!!!";
?>