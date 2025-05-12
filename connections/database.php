<?php
function connection()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = 'darro';
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=darro", $username, $password);

    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch (PDOException $e) {
    //     echo "Connection failed!" . $e->getMessage();
    // }

    $connection = new mysqli($host, $username, $password, $database);

    //checking the successful connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        return $connection;
        header('Location: ../iventory/index.php');
    }
}
