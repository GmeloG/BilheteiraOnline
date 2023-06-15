<?php
$serverName = "127.0.0.1"; 
$userName = "root"; 
$ServerPassword =""; 
$databaseName = "bilheteira";

$connection = mysqli_connect($serverName, $userName, $ServerPassword, $databaseName);

if(!$connection){
    die ("Connection failed:" .mysqli_connect_error());
}
echo "Connected successfully";

$nome= $_GET['nome'];
$email= $_GET['email'];
$telefone= $_GET['telefone'];
$mensagem= $_GET['mensagem'];

$sql_query = "INSERT INTO `utilizador`(`nome`, `email`, `telefone`,`mensagem`) VALUES ('$nome','$email','$telefone','$mensagem')";

if (mysqli_query($connection, $sql_query)){
    echo "Message sent!";
}
else{
    echo "Error: " .$sql . "".mysqli_error($connection);
}
mysqli_close($connection)


?>
?>