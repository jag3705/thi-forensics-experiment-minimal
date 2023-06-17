<?php

$DB_HOST = "db";
$DB_USER = "root";
$DB_PASS = "DneWpEKzQnWCM4BcTrchKv7qDH";
$DB_NAME = "thi_app";


try {
    $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";


    $sth = $conn->prepare("SELECT * FROM users");
    $sth->execute();
    $results = $sth->fetchAll(PDO::FETCH_ASSOC);

    var_dump($results);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}