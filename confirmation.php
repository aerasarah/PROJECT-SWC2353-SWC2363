<?php
session_start();

if (isset($_SESSION['totalAmount'])) {
    $totalAmount = $_SESSION['totalAmount'];
} else {
    // Handle the case where totalAmount is not set.
}

if (isset($_SESSION['tuitionFees'])) {
    $tuitionFees = $_SESSION['tuitionFees'];
} else {
    // Handle the case where totalAmount is not set.
}

if (isset($_SESSION['adminFees'])) {
    $adminFees = $_SESSION['adminFees'];
} else {
    // Handle the case where totalAmount is not set.
}

if (isset($_SESSION['hostelFees'])) {
    $hostelFees = $_SESSION['hostelFees'];
} else {
    // Handle the case where totalAmount is not set.
}

if (isset($_SESSION['compoundFees'])) {
    $compoundFees = $_SESSION['compoundFees'];
} else {
    // Handle the case where totalAmount is not set.
}
?>

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
        $refNumber = $row['refNumber'];
    } else {
        echo "Student information not found.";
    }
} else {
    echo "Student ID not set.";
}

// Close the database connection
$conn->close();
?>




<html>
<head>
    <title>Confirmation</title>
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
            margin: -10px 0;
        }

        .logout-img
        {
            display: flex;
            justify-content: center;
            margin-top: -200px;
            margin-left: 1700px;
        }

        .logout-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            margin-top: 200px;
            width: 1000px;
        }

        .table, th, td {
            border: 1px solid black;
            padding: 8px 40px;
            text-align: center;
            font-size: 20px;
        }

        .td:first-child {
            width: 10px;
        }

        .center-table {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px; /* Reduce the margin to bring buttons closer */
            margin-bottom: 20px;
        }

        .back-button {
            background-color: indianred;
            color: white;
            font-size: 20px;
            padding: 13px 30px;
            border: none;
            cursor: pointer;
            transition: background-color 1.0s;
            margin-right: 10px;
        }

        .confirm-button {
            background-color: royalblue;
            color: white;
            font-size: 20px;
            padding: 13px 30px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        .back-button:hover, .confirm-button:hover {
            background-color: lightslategray;
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
            <div class="logout-img">
                <div class="logout-container">
                    <a href="login.html"><img src="logoutpic.png" alt="Image 3" width="160px" class="button-link"></a>
                </div>
            </div>
        </div>

        <!-- Student Details Table -->
        <table cellpadding=10 cellspacing=0 border=1 align="center">
            <tr>
                <td align="center" colspan="2"><b> - STUDENT DETAILS -</td>
            </tr>
            <tr>
                <td align="center" style="width: 260px;"><b>STUDENT NAME</b></td>
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

        <table cellpadding=10 cellspacing=0 border=1 align="center" style="margin-top: 50px;">
    <tr>
        <td align="center" colspan="2"><b> - PAYMENT DETAILS - </td>
    </tr>
    <tr>
    <td align="center" width="260"><b>TUITION FEES</b></td>
    <td align="center"><?php echo isset($_GET['tuitionFees']) ? 'RM ' . $_GET['tuitionFees'] : ''; ?></td>
</tr>

    <tr>
        <td align="center"><b>ADMINISTRATIVES FEES</b></td>
        <td align="center"><?php echo isset($_GET['adminFees']) ? 'RM ' . $_GET['adminFees'] : ''; ?></td>
    </tr>
    <tr>
        <td align="center"><b>HOSTEL FEES</b></td>
        <td align="center"><?php echo isset($_GET['hostelFees']) ? 'RM ' . $_GET['hostelFees'] : ''; ?></td>
    </tr>
    <tr>
        <td align="center"><b>COMPOUND FEES</b></td>
        <td align="center"><?php echo isset($_GET['compoundFees']) ? 'RM ' . $_GET['compoundFees'] : ''; ?></td>
    </tr>
    <tr>
        <td align="center"><b>TOTAL AMOUNT</b></td>
        <td align="center"><b><?php echo isset($_GET['totalAmount']) ? 'RM ' . $_GET['totalAmount'] : ''; ?></td>
    </tr>
</table>

        <!-- Payment Table -->
        <table cellpadding=10 cellspacing=0 border=1 align="center" style="margin-top: 50px;">
            <tr>
                <td align="center" colspan="2"><b> - PAY - </td>
            </tr>
            <tr>
                <td align="center" style="width: 260px ;"><b>REFERENCE NUMBER</b></td>
                <td align="center"><?php echo $refNumber; ?></td>
            </tr>
            <tr>
                <td align="center"><b>TOTAL AMOUNT</b></td>
                <td align="center"><b><?php echo isset($_GET['totalAmount']) ? 'RM ' . $_GET['totalAmount'] : ''; ?></td>
            </tr>
        </table>

        <div class="button-container">
            <form action="studentpayment.php" method="get">
                <input type="submit" value="Back" class="back-button">
            </form>
            <form id="confirmationForm" action="payment.php" method="get">
                <input type="hidden" name="studName" value="<?php echo $studName; ?>">
    <input type="hidden" name="idNumber" value="<?php echo $studID; ?>">
<input type="hidden" name="totalAmount" value="<?php echo isset($_GET['totalAmount']) ? $_GET['totalAmount'] : ''; ?>">
                <input type="submit" value="Proceed" class="confirm-button">
            </form>
        </div>
    </div> <!-- Close the main container div -->
</body>
</html>
