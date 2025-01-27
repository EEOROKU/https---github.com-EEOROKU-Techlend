<?php
$servername = "127.0.0.1:3306";
$username = "u575616828_Techlend";
$password = "Skippiespb1205@";
$dbname = "u575616828_Techlend";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $sql = "INSERT INTO Newsletter (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Suscribed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
