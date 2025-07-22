<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "abeda-e-dastarkhwan";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM reservations ORDER BY date, time");

echo "<h2>Reservations</h2><table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Date</th><th>Time</th><th>People</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['date']}</td>
            <td>{$row['time']}</td>
            <td>{$row['people']}</td>
          </tr>";
}

echo "</table>";
$conn->close();
?>
