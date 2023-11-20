<?php
// Start the session at the beginning
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

        .title
        {
            font-size: 30px;
            margin-top: 180px;
            margin-bottom: -40px;
        }

        table {
            border-collapse: collapse;
            margin-top: 50px;
            align-items: center;
            margin-bottom: 10px;
            width: 90%;
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

    td.stud-name {
    width: 5000px; /* Adjust the width as needed */
}

span.payment-status {
    text-decoration: underline;
    cursor: pointer; /* Add this line to make it clickable */
    color: blue; /* Add this line to change the text color to blue */
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

        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
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
        <div class="logout-img">
    <div class="logout-container">
        <a href="login.html"><img src="logoutpic.png" alt="Image 3" width="160px" class="button-link"></a>
    </div>
</div>

        <div class="title">
            <p><b>VIEW STUDENT RECORD</b></p>
        </div>

        
<?php
        // Check if $studID is set in the session
        if (isset($_SESSION['studID'])) {
            $studID = $_SESSION['studID'];

            // Fetch and display payment status
            $paymentQuery = "SELECT studID, paymentStatus FROM infoadminn";
            $paymentResult = $conn->query($paymentQuery);

            if ($paymentResult->num_rows > 0) {
                echo "<table cellpadding=10 cellspacing=0 border=1 align='center'>";
                echo "<tr>
                        <td align='center'><b>ID</b></td>
                        <td align='center'><b>STUDENT NAME</b></td>
                        <td align='center'><b>ID NUMBER</b></td>
                        <td align='center'><b>INTAKE</b></td>
                        <td align='center'><b>COURSE CODE</b></td>
                        <td align='center'><b>EMAIL</b></td>
                        <td align='center'><b>STATUS</b></td>
                      </tr>";

                // Fetch all student information
                $query = "SELECT * FROM infoadminn";
                $result = $conn->query($query);

                // Check if there are rows in the result
                if ($result && $result->num_rows > 0) {
                    // Output data from rows
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td align='center'>" . $row['id'] . "</td>
                                <td align='center' class='stud-name'>" . $row['studName'] . "</td>
                                <td align='center' width='100px'>" . $row['studID'] . "</td>
                                <td align='center' width='80px'>" . $row['studIntake'] . "</td>
                                <td align='center' width='100px'>" . $row['courseCode'] . "</td>
                                <td align='center' width='200px'>" . $row['studEmail'] . "</td>
                                <td align='center' width='80px'>
                                <span class='payment-status' data-stud-id='" . $row['studID'] . "' data-payment-status='" . $row['paymentStatus'] ."'>" . ($row['paymentStatus'] === 'Paid' ? 'Paid' : 'Unpaid') . "</span>
                                </td>
                                </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' align='center'>No student information found.</td></tr>";
                }

                // Close the table
                echo "</table>";
            } else {
                echo "<div align='center'>Payment status not available</div>";
            }
        } else {
            echo "<div align='center'>Admin ID not set.</div>";
        }

        // Close the database connection
        $conn->close();
        ?>

    </div>

   <!-- Add a modal for displaying payment items -->
<div id="paymentModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="paymentItems"></div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var paymentStatusElements = document.querySelectorAll('.payment-status');

        paymentStatusElements.forEach(function (element) {
            element.addEventListener('click', function () {
                var studID = element.getAttribute('data-stud-id');
                var paymentStatus = element.getAttribute('data-payment-status');

                if (paymentStatus === 'Paid') {
                    // If payment status is 'Paid', open the payment modal
                    openPaymentModal(studID);
                } else {
                    // Redirect to infoitems.php with the studID and paymentStatus parameters
                    redirectToInfoItems(studID, paymentStatus);
                }
            });
        });

        // Modal close button event
        var modalClose = document.querySelector('.close');
        modalClose.addEventListener('click', function () {
            closePaymentModal();
        });
    });

    function redirectToInfoItems(studID, paymentStatus) {
        window.location.href = "infoitems.php?studID=" + studID + "&paymentStatus=" + paymentStatus;
    }

    function openPaymentModal(studID) {
        var modal = document.getElementById('paymentModal');
        modal.style.display = 'block';

        // Fetch and display payment items for the selected student using AJAX
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('paymentItems').innerHTML = this.responseText;
            }
        };
        xmlhttp.open('GET', 'infoitems.php?studID=' + studID, true);
        xmlhttp.send();
    }

    function closePaymentModal() {
        var modal = document.getElementById('paymentModal');
        modal.style.display = 'none';
    }
</script>

</body>
</html>
