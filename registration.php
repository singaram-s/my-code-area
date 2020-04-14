<!DOCTYPE html>
<html>
<head>
<title>INDEX_page</title>
<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<?php

$conn = new mysqli('localhost','root','','useraccounts',3306);

$fn = $_POST['Firstname'];
$ln = $_POST['Lastname'];
$pass = $_POST['Password'];
$eml = $_POST['Email'];
$gen = $_POST['Gender'];

$ins = "INSERT INTO records(firstname,lastname,password,username,gender) VALUES ('$fn','$ln','$pass','$eml','$gen')";

$conn->query($ins);

$conn->close();

?>
<div class="container">
<div class="registration">

<h1>REGISTRATION:</h1>

<form class="fm" method="post" action="registration.php">

<input name="Firstname" type="text" class="textbox" placeholder="FirstName"><br><br>

<input name="Lastname" type="text" class="textbox" placeholder="LastName"><br><br>

<input name="Password" type="password" class="textbox" placeholder="Password"><br><br>

<input name="Email" type="text" class="textbox" placeholder="username@domain_name."><br><br><br>

<font size='6' color='Cornsilk'>GENDER: </font>

<font size='6' color='Cornsilk'>Male:</font><input type="radio" name="Gender" value="male" class="radiobox"><font size='6' color='Cornsilk'>    Female:</font><input type="radio" name="Gender" value="female" class="radiobox"><br><br>

<input type="submit" class="button" value="SUBMIT" ><br><br>

<font size='6' color="Cornsilk" id="target" style="margin-left:23px;">Registered: You Can Login Now</font>

</form>

</div>
<div class="login">

<h1>LOGIN:</h1>

<form method="post" action="">

<input name="username" type="text" placeholder="username@domain_name" class="textbox"><br><br>

<input name="password" type="password" placeholder="Password" class="textbox"><br><br>

<input type="submit" class="button" value="SUBMIT">

</form>

</div>
</div>
</body>
</html>
