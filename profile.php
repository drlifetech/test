<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
</head>
<body>
<center>
<?php
if(isset($_GET['name'])){
  $name = $_GET['name'];
  echo "<h1>".$name."'s Profile</h1>".
  "<hr>".
  "<br>".
  "<h3>Choose an option</h3>";

}
function smClick(){
  header("something.php?name=" . $name);
}
?>
<form action="" method="post">
<input type="Submit" value="Something" name="btn">
</form>
</center>
</body>
</html>
<?php
  function ach($a){
    $name = $_GET['name'];
    header("something.php?name=" . $name);
  }
  if(isset($_POST['btn'])){
    echo ach($_POST['btn']);
  }
?>