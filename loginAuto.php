<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define $myusername and $mypassword
$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$sql = "SELECT username, password FROM user WHERE username='$myusername' and password='$mypassword'";
$result = $conn->query($sql);

// Mysql_num_row is counting table row
if ($result->num_rows > 0) {
    // Start a session
    session_start();

    // Set the student ID session variable
    $_SESSION['studID'] = $myusername;

    // Redirect to file "home.php"
    header("location: home.php");
} else {
    echo "<p>Wrong Username or Password. Please try again.</p>";
}

$conn->close();
?>
