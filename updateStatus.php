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

if (isset($_SESSION['studID'])) {
    $studID = $_SESSION['studID']; // Assign the session variable to $studID

    // Update the payment status to 'Paid'
    $updateQuery = "UPDATE infoadminn SET paymentStatus = 'Paid' WHERE studID = '$studID'";
    $updateResult = $conn->query($updateQuery);

    if ($updateResult === TRUE) {
        echo "Payment status updated successfully!";
    } else {
        echo "Error updating payment status: " . $conn->error;
    }
} else {
    echo "Student ID not set.";
}

// Close the database connection
$conn->close();
?>
