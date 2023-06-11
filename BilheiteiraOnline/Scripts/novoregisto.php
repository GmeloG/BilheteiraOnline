<?php 

    $serverName = "localhost";
    $userName = "root";
    $ServerPassword ="";
    $databaseName = "bilheteira";

    $connection = mysqli_connect($serverName, $userName, $ServerPassword);

    if(!$connection){
        echo ("Connection failed:" .mysqli_connect_error());
    }

    
    $nome= $_GET['Nome'];
    $email= $_GET['Email'];
    $password= $_GET['Password'];


    $sql_query = "INSERT INTO utilizador (Nome,Email,Password) VALUES ('$nome','$email','$password')";

    if (mysqli_query($connection, $sql_query)){

        echo "New User added!!";

    }
    else{

        echo "Error: " .$sql . "".mysqli_error($connection);

    }
    mysqli_close($connection)


?>
