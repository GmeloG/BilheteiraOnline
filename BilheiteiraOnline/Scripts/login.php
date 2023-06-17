<html>

<head></head>

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

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "SELECT * FROM `utilizador` WHERE email = '$email'";
    $result = mysqli_query($connection, $sql_query) or die(mysqli_error($connection));
    $numrows = mysqli_num_rows($result);

    if ($numrows > 0) {

        $row = mysqli_fetch_assoc($result);
        $ServerPassword = $row['password'];

        if ($password === $ServerPassword) {
            echo '<script>';
            echo  'window.alert("Bem Vindo: ' . $email . '");';
            echo '</script>';
        } else {
            echo '<script>;';
            echo 'window.alert("Password errada");';
            echo '</script>';
        }
    } else {
        echo '<script>';
        echo  'window.alert("Este email não foi encontrado");
            window.location.href="http://localhost/2parte/BilheiteiraOnline/utilizador.html";';
        echo '</script>';
        return false;
    }

    mysqli_close($connection);

    ?>
    <script>
        window.location.href = "http://localhost/2parte/BilheiteiraOnline/index.html";
    </script>

</body>

</html>