<html>

<body >


Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["mail"]; ?>
<?php
$conn=new mysqli("localhost","root","","login");
$name=$_POST["name"];
$email=$_POST["mail"];
$pass="hello";
$sql='insert into users values("anitha","$a","$b")';
$sqlm = "INSERT INTO users VALUES (?,?,?)";
$stmt= $conn->prepare($sqlm);
$stmt->bind_param("sss", $name, $email, $pass);
$stmt->execute();
$result=mysqli_query($conn,$sql);

?>
<script>
function hello()
{
window.open("Untitled 1.html","_self");

}
</script>
</body>
</html>