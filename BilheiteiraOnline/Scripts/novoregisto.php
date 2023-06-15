<html>
<head></head>
<body>

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
    $password= $_GET['password'];

    $sql_query = "SELECT * FROM `utilizador` WHERE email = '$email';";
    $result = mysqli_query($connection,$sql_query) or die(mysqli_error($connection));
    $numrows = mysqli_num_rows($result);
    if($numrows == 0)
    {   
        $sql_query = "INSERT INTO `utilizador`(`nome`, `email`, `password`) VALUES ('$nome','$email','$password')";

        if (mysqli_query($connection, $sql_query)){
            echo "New User added!!";
        }
        else{
            echo "Error: " .$sql . "".mysqli_error($connection);
        }
    }    
    else {
      
        echo '<script>';
        echo  'window.alert("Já existe este email");
                window.location.href="http://localhost/2parte/BilheiteiraOnline/utilizador.html";';
        echo '</script>';
        return false;
    }
    mysqli_close($connection);


?>
<script>window.location.href="http://localhost/2parte/BilheiteiraOnline/index.html";</script>


</body>
</html>
