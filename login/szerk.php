<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sq = "SET NAMES 'utf8';";
$names = $conn->query($sq);

$id = $_POST['id'];
$person = $_POST['person'];

$sql = "UPDATE tasks SET person='$person' WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>