<?php
$HOST="localhost";
$DATABASE="orientation_db";
$USERNAME="root";
$PASSWORD="";

try {
    $conn = new PDO("mysql:host=$HOST;dbname=$DATABASE", $USERNAME, $PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
     alert("Connection failed: " . $e->getMessage());
}

?>