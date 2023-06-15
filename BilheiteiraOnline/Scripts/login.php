<html>
<head>Login</head>
<body>
<?php

$serverName = "127.0.0.1";
$userName = "root";
$ServerPassword = "";
$databaseName = "bilheteira";

$connection = mysqli_connect($serverName, $userName, $ServerPassword, $databaseName);

if (!$connection) {
die("Connection failed:" . mysqli_connect_error());
}  
echo "Connected successfully";

$email= $_GET['email'];
$password= $_GET['password'];

$sql_query = "SELECT * FROM `utilizador` WHERE email = '$email' and password = '$password'";
$result = mysqli_query($connection,$sql_query) or die(mysqli_error($connection));
$numrows = mysqli_num_rows($result);
if($numrows > 0)
{
echo 'Your in';
}
else
{
echo 'User not found';
}
?>

 
<script> onClickLogin()</script>

</body>
</html>
