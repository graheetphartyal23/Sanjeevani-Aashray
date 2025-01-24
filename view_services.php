<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch services
$sql = "SELECT * FROM hospital_services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Available Hospital Services</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['hospital_name'] . "</h2>";
        echo "<p>ICU: " . $row['icu_count'] . "</p>";
        echo "<p>Ventilators: " . $row['ventilators'] . "</p>";
        echo "<p>Oxygen: " . ucfirst($row['oxygen']) . "</p>";
        echo "<p>Beds: " . $row['beds_count'] . "</p>";
        echo "<p>Blood Bank: " . ucfirst($row['blood_bank']) . "</p>";
        echo "<p>Emergency Beds: " . $row['emergency_beds'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "No services available.";
}

$conn->close();
?>