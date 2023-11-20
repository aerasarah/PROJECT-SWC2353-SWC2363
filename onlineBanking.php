<?php
session_start();

// Retrieve data from the session
$studName = $_SESSION['studName'];
$studID = $_SESSION['studID'];
$Intake = $_SESSION['Intake'];
$payItems = $_GET['payItems']; // Assuming you are passing the payItems via GET
$totAmount = $_SESSION['totAmount'];
$selectedBank = $_POST['bank']; // Assuming you are using POST to send the bank selection

// Database connection details
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

// Insert data into the database
$query = "INSERT INTO information (studName, studID, Intake, courseCode, payItems, totAmount, selectedBank) 
          VALUES ('$studName', '$studID', '$Intake', '$courseCode', '$payItems', '$totAmount', '$selectedBank')";

if ($conn->query($query) === TRUE) {
    // Data inserted successfully
    $_SESSION['transactionStatus'] = 'successful';
} else {
    // Error in insertion
    $_SESSION['transactionStatus'] = 'failed';
}

// Close the database connection
$conn->close();

// Redirect to information.php after the data is inserted
header("Location: information.php");
exit();
?>
