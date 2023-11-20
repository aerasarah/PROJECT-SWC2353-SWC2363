<?php
session_start();

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "college";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if studID is set in the session
if (isset($_GET['studID'])) {
    $studID = $_GET['studID'];

    // Fetch payment items for the selected student
    $paymentQuery = "SELECT * FROM payment_itemss WHERE studID = '$studID'";
    $paymentResult = $conn->query($paymentQuery);

    if ($paymentResult->num_rows > 0) {
        echo "Payment Details: <p>Student ID: $studID</p>";
        while ($row = $paymentResult->fetch_assoc()) {
            echo "Items: ". $row['item_description'] . "<p> RM : " . $row['amount'] . "<p>";
        }
    } else {
        echo "No payment items found for Student ID: $studID";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Student ID not set.";
}
?>
