<html>

<body onload="hello()">

<p>Theatre:<span id="theatre" name="theatre"><?php echo $_POST["theatre"]; ?></span></p>
<p>Movie:<span id="movie" name="movie"><?php echo $_POST["movie"]; ?></span></p>
<p>Date:<span id="date" name="date"><?php echo $_POST["date"]; ?></span></p>
<p>Time:<spanid="time" name="time"><?php echo $_POST["time"]; ?></span></p>
<p>No.of seats booked:<span id="noofseats" name="noofseats"><?php echo $_POST["noofseats"]; ?></span></p>
<p>Seats:<span id="demo" name="demo"><?php echo $_POST["demo"]; ?></span> </p>
<p>Cost per seat:<span id="cost" name="cost"><?php echo $_POST["cost"]; ?></span></p><br><br><br style="width: 1px;">
<p>Total:<span id="totalcost" name="totalcost"><?php echo $_POST["totalcost"]; ?></span></p>

<?php
$conn=new mysqli("localhost","root","","login");
$a=$_POST["demo"];
$b=$_POST["theatre"];
$c=$_POST["movie"];
$d=$_POST["time"];
$e=$_POST["date"];
$sqluser='select username from activa';
$result = $conn->query($sqluser);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $f=$row["username"];
  }
}
$sql='insert into ticketbooking values(?,?,?,?,?,?)';

$stmt= $conn->prepare($sql);
$stmt->bind_param("ssssss",$f,$b,$c,$d,$a,$e);
$stmt->execute();
//$result=mysqli_query($conn,$sql);

?>

<script>
function hello()
{
window.open("base2.php","_self");
alert("Tickets booked");
}
</script>
</body>
</html>