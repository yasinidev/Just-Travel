<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "tour";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection=new PDO("mysql:host={$serverName};dbname={$dbName}",$dbName,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if($connection){
    // echo "<script>alert('connected succcessfully');</script>";
    }
    else{
    echo "<script>alert('connection Faillure!!!');</script>";
    }
} catch (Exception $e) {
    
    $e->getMessage();
}
?>
