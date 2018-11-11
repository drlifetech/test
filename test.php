<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Test</title>
</head>

<body>
<center>
<?php
    echo "<h1>Welcome!</h1>";
    echo "<hr>";
    echo "<h3>Please enter your name below!</h3>";
    echo "<br>";
?>
<form action="submit1.php" method="post">
    Your name: <input type="text" name="name" placeholder="*your name here*">
    <input type="submit">
</form>
</center>
</body>