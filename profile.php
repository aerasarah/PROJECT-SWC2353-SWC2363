<?php
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
session_start();

if (isset($_SESSION['studID'])) {
    $studID = $_SESSION['studID']; // Assign the session variable to $studID

    // Create and execute a query to fetch information for the logged-in student
    $query = "SELECT * FROM studentd WHERE studID = '$studID'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $studName = $row['studName'];
        $studID = $row['studID'];
        $studIntake = $row['studIntake'];
        $courseCode = $row['courseCode'];
        $courseName = $row['courseName'];
        $studEmail = $row['studEmail'];
    } else {
        echo "Student information not found.";
    }
} else {
    echo "Student ID not set.";
}

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Student Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .header {
            background-color: beige;
            color: black;
            padding: 0px 0;
            margin-top: 50px;
            align-items: center;
        }

        .header-img {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 5px 0;
            margin-left: 50px;
            margin-top: -10px;
        }

        table {
            border-collapse: collapse;
            margin-top: 50px;
            align-items: center;
            margin-bottom: 10px;
        }

        .table,
        th,
        td  {
            border: 1px solid black;
            padding: 20px 100px;
            text-align: center;
            font-size: 20px;
            align-items: center;
            width: 470px;
        }

        .td:first-child {
            width: 90px;
        }

         td {
        text-align: center; /* Align text to the left */
        padding: 20px 20px; /* Add padding as needed */
        font-size: 20px;
    }

        .center-table {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

       .button-container {
            display: flex;
            justify-content: center; /* Center the buttons horizontally */
            align-items: center; /* Center the buttons vertically */
            margin-top: 50px; /* Add margin to separate from the table */
            margin-bottom: 40px;
        }

        .back-button {
            background-color: indianred;
            color: white;
            font-size: 20px;
            padding: 13px 30px;
            border: none;
            cursor: pointer;
            transition: background-color 1.0s; /* Add a smooth color transition on hover */
            margin-right: 10px; /* Add margin to separate the buttons */
        }

        .back-button:hover, .confirm-button:hover {
            background-color: lightslategray; /* Change color on hover */
        }
    </style>
</head>
<body style="background-color: beige;">
    <div class="container">
        <div class="header">
            <div class="header-img">
                <img src="logo.png" alt="Image 1" width="340" style="margin-right: 140px;">
                <img src="maralogo.png" alt="Image 2" width="150" style="margin-right: 30px;">
            </div>
        </div>

                <table cellpadding=10 cellspacing=0 border=1 align="center">
            <tr>
                <td align="center" colspan="2"><b> - STUDENT DETAILS -</td>
            </tr>
            <tr>
                <td align="center" style="width: 20px;"><b>STUDENT NAME</b></td>
                <td align="center"><?php echo $studName; ?></td>
            </tr>
            <tr>
                <td align="center"><b>ID NUMBER</b></td>
                <td align="center"><?php echo $studID; ?></td>
            </tr>
            <tr>
                <td align="center"><b>INTAKE</b></td>
                <td align="center"><?php echo $studIntake; ?></td>
            </tr>
            <tr>
                <td align="center"><b>COURSE CODE</b></td>
                <td align="center"><?php echo $courseCode; ?></td>
            </tr>
            <tr>
                <td align="center"><b>COURSE NAME</b></td>
                <td align="center"><?php echo $courseName; ?></td>
            </tr>
            <tr>
                <td align="center"><b>EMAIL</b></td>
                <td align="center"><?php echo $studEmail; ?></td>
            </tr>
        </table>

        </div>
        <div class="button-container">
            <form action="home.php" method="get">
                <input type="submit" value="Back" class="back-button">
            </form>
        </div>
    </div>
</body>
</html>
