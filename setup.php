<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "weventory";

    $connection = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
?>