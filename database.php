<?php
function getDatabaseConnection() {
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";                 // or your real password
    $db   = "meowmate_db";      // your DB name

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

