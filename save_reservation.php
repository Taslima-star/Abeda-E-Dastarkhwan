<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "abeda-e-dastarkhwan";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$resDate   = $_POST['resDate'];
$resTime   = $_POST['resTime'];
$partySize = $_POST['partySize'];
$name      = $_POST['name'];
$email     = $_POST['email'];
$phone     = $_POST['phone'];

$sql = "INSERT INTO reservations (name, email, phone, date, time, people)
        VALUES ('$name', '$email', '$phone', '$resDate', '$resTime', '$partySize')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation saved successfully.";
    // You can redirect to thank you page too
    // header("Location: thankyou.html");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
