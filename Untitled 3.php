<html>

<body onload="demo()">


Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["img"]; ?>
<br>
<?php

$post = array("name");

foreach($post as $field) {
     global $$field;
     $$field = $_POST[$field];
}
echo $name;

?>

<p id="hello">What r u doing</p>

<script>
function demo(){
var a="<?php echo $name?>";
document.getElementById("hello").innerHTML=a;
}
</script>
</body>
</html>