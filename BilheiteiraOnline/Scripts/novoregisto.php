<?php 

    $serverName = "127.0.0.1";
    $userName = "root";
    $ServerPassword ="";
    $databaseName = "bilheteira";

    $connection = mysqli_connect($serverName, $userName, $ServerPassword, $databaseName);

    if(!$connection){
        die ("Connection failed:" .mysqli_connect_error());
    }

    
    $nome= $_GET['nome'];
    $email= $_GET['email'];
    $password= $_GET['password'];


    $sql_query = "INSERT INTO `utilizador`(`nome`, `email`, `password`) VALUES ('$nome','$email','$password')";

    if (mysqli_query($connection, $sql_query)){

        echo "New User added!!";

    }
    else{

        echo "Error: " .$sql . "".mysqli_error($connection);

    }
    mysqli_close($connection)


?>
