<html>
<body>

<?php
	$conn=mysqli_connect("localhost","root","","login");
	$sql="update activa set count=0 where count=1";
	$result=mysqli_query($conn,$sql);
	?>
<script>
	window.open('base.html','_self');
</script>
</body>
</html>