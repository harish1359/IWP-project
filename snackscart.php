<html>

<body>
<?php
$conn=new mysqli("localhost","root","","login");
$sqluser='select username from activa';
$result = $conn->query($sqluser);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $a=$row["username"];
  }
}
$m=$_POST["fixlist"];
echo $m;
?>

</body>
</html>