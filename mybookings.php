<html>
<head>
<title>Test for my bookings.html</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php
$conn=mysqli_connect("localhost","root","","login");
$sqluser='select username from activa';
$resultuser = $conn->query($sqluser);
if ($resultuser->num_rows > 0) {
  while($row = $resultuser->fetch_assoc()) {
    $u=$row["username"];
  }
}
$start="select count(username) as count from ticketbooking where username='$u'";
$resultstart=mysqli_query($conn,$start);
$rowone=$resultstart->fetch_assoc();
$count=$rowone["count"];
//echo $count."<br>";
$sql="select * from ticketbooking where username='$u' ";
$result=	mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        //echo $row["movie"]."<br>";
      echo  '<div class="container" style="margin-top: 30px;">
<div class="row">
<div class="col-sm-3" style="background-color: orange;padding: 10px;">
<p style="text-align: center;">'.substr($row["date"],7,4).'</p>
<hr style="height: 1px;width: 100%;color: blue;">
<h1 style="text-align: center">'.substr($row["date"],0,6).'</h1>
</div>
<div class="col-sm-9"  style="background-color: lightblue;">
<h1 style="text-align: center;padding-top: 20px;font-size: 50px;text-shadow: 2px 2px blue;">'.$row["movie"].'</h1>
<br>
<h6 style="padding-left: 20px;float: left;">THEATRE: '.$row["theatre"].'<span style="width: 10px;color: lightblue;">doubledoublespace</span> TIME: '.$row["time"].'</h6><h6 style="float: right">SEATNO: '.$row["seatno"].'</h6>
</div>

</div>
</div>'; 
    }
}
?>

</body>

</html>