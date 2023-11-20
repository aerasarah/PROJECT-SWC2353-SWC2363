<?php
session_start();

if (isset($_GET['totalAmount'])) {
    $totalAmount = $_GET['totalAmount'];
} else {
    // Handle the case where totalAmount is not set.
    // For example, you can set a default value or redirect the user to an error page.
    echo "Error: Total amount not set.";
    // You may want to add additional logic here, such as redirecting the user to an error page.
    exit; // Stop further execution of the script.
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
        body 
        {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .header 
        {
            background-color: beige;
            color: black;
            padding: 0px 0;
            margin-top: 50px;
            align-items: center;
        }

        .header-img 
        {
            display: flex;
            justify-content: center; /* Center images horizontally */
            align-items: center; /* Center images vertically */
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



        .header-text
        {
            font-size: 35px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        table {
            border-collapse: collapse;
            margin-top: -20px;
            align-items: center;
            margin-bottom: 10px;
            width: 1000px;
        }

        .table, th, td {
            border: 1px solid black;
            padding: 12px 40px;
            text-align: center;
            font-size: 20px;
            align-items: center;
        }
        
        .td:first-child {
            width: 10px; /* Set the width of the first column */
        }

        .text
        {
            font-size: 22px;
            align-items: center;
        }

        .text-content
        {
            font-size: 20px;
            align-items: center;
            justify-content: center;
        }
        
        .center-table 
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            margin-top: 90px;
        }

        .box-items
        {
            background-color: lightgrey;
            padding: 5px;
            width: 100%; 
            align-items: center;
            border: 2px solid #333; /* Add a border around the content */
            border-radius: 0px; /* Add rounded corners to the border */
            height: 120px;
            margin-top: 170px;
        }

        .box-payment
        {
            background-color: beige;
            padding: 5px;
            width: 900; 
            margin-top: 70px;
            align-items: center;
            border: 2px solid #333; /* Add a border around the content */
            border-radius: 20px; /* Add rounded corners to the border */
            height: 340px;
            margin-top: 40px;
        }


        .title
        {
            background-color: beige;
            text-align: center;
            align-items: center;
            margin-top: 100px;
            padding: 0px 0;
        }

        .dropdown {
            display: none;
            background-color: beige;
            position: absolute;
            z-index: 1;
            width: 350px;
            border: 2px solid #ccc; /* Add a border to the dropdown box */
            top: 100px;
            margin-left: 398px;
             max-height: 200px; /* Set a maximum height for scrolling */
            overflow-y: auto; /* Enable vertical scrolling when content overflows */
        }

        .dropdown a {
            display: block;
            text-align: center;
            padding: 20px;
            text-decoration: none;
            color: black;
            background-color: antiquewhite;

        }

        .button-container {
            display: flex;
            justify-content: center; /* Center the buttons horizontally */
            align-items: center; /* Center the buttons vertically */
            margin-top: 60px; /* Add margin to separate from the table */
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

        .confirm-button {
            background-color: royalblue;
            color: white;
            font-size: 20px;
            padding: 13px 30px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s; /* Add a smooth color transition on hover */
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
            <div class="logout-img">
    <div class="logout-container">
        <a href="login.html"><img src="logoutpic.png" alt="Image 3" width="160px" class="button-link"></a>
    </div>
</div>

</div>

        <div class="box-items">
            <div class="text">
                <p><b>~</b> You must have Internet Banking Account in order to make transaction using FPX.<b>~</b>
                <p><b>~</b> Do not close browser / refresh page until you receive response.<b>~</b>
            </div>
        </div>

        
        <div class="center-table">
            
<table cellpadding=10 cellspacing=0 border=1 align="center">
    <tr>
        <td align="center" colspan="2"><b> - PAY - </td>
    </tr>
    <tr>
        <td align="center" width="260px"><b>REFERENCE NUMBER</b></td>
        <td align="center"><?php echo $refNumber; ?></td>
    </tr>
    <tr>
        <td align="center"><b>TOTAL AMOUNT</b></td>
        <td align="center"><b><?php echo isset($_GET['totalAmount']) ? 'RM ' . number_format(($_GET['totalAmount'] + 1),2) : ''; ?></b>
</td>
    </tr>

</table>
</div>

<div class="text">
    <p><i>~ Merchant service charge will be imposed at RM 1.00 for every successful transaction ~<i>
</div>
<div class="box-payment">
        <div class="title">
            <div class="header-text" style="margin-top: -60px;">
                <a>POWERED BY<img src="fpxlogo.png" style="width: 100px; margin-left: 25px;"></a>
            </div>

    <p><select id="bank" name="bank" class="bank-selection" style="width: 800px; height: 50px; font-size: 20px;">
    <option value="" disabled selected style="align-items: center;">Choose Your Bank.....</option>
    <option value="AGRONet">AGRONet</option>
    <option value="AmBank">AmBank</option>
    <option value="BSN">BSN</option>
    <option value="Bank Islam">Bank Islam</option>
    <option value="Bank Muamalat">Bank Muamalat</option>
    <option value="Bank Rakyat">Bank Rakyat</option>
    <option value="CIMB Clicks">CIMB Clicks</option>
    <option value="Maybank2U">Maybank2U</option>
    <option value="Public Bank">Public Bank</option>
    <option value="RHB Bank">RHB Bank</option>
</select>

    
    <p style="margin-top: 20px; font-size: 22px; margin-bottom: 50px;">
    By clicking on <b>'PROCEED'</b> below, you agree to <a href="https://www.mepsfpx.com.my/FPXMain/termsAndConditions.jsp" class="button-link" style="text-decoration: underline;">FPX's Terms and Conditions</a></span>
</p>

        </div>
        
        <div class="button-container">
            <form action="studentpayment.php" method="get">
                <input type="submit" value="Back" class="back-button">
            </form>
            <form id="bankForm" method="post" onsubmit="return validateBankSelection();">
     <!-- Add this hidden input field for studID -->
    <input type="hidden" name="studID" value="<?php echo $studID; ?>">

    <!-- Proceed button -->
    <input type="submit" value="Proceed" class="confirm-button">
</form>


            <form action="status.php" method="get">
                <input type="submit" value="Cancel" class="back-button">
            </form>
        </div>
    </div>
</div>
<div class="box-items" style="height: 350px; background-color: lightgrey; border-radius: 0px; margin-top: 120px;">
<div class="content">
    <div class="text-content" style="margin-left: 320px; margin-top: 30px;">
        <p><b>What Is FPX?</b></p>
        <p> - A real-time payment solution from your internet banking account.</p>
    </div>
    <div class="text-content" style="margin-left: 320px; margin-top: 50px;">
        <p><b>Benefits of FPX:</b></p>
        <p> - <b>SIMPLE:</b> Only in a single tick.
        <p><b>- CONVENIENT:</b> Payment anytime and anywhere.
        <p><b>- SECURE:</b> FPX uses authentication and certification to ensure safe transaction.
        <p>- Real-time transaction.
    </div>
    <div class="text-content" style="margin-left: 1150px; margin-top: -335px;">
        <p><b>MORE INFO</b></p>
        <p> - For more information, please visit <a href="https://www.paynet.my/personal-fpx.html" class="button-link" style="text-decoration: underline;">www.paynet.my.
    </div>
</div>
</div>
    <script>
// Function to display a message and redirect to updateStatus.php
function completePayment() {
    // Display a message (you can customize this part)
    alert(" Redirecting to the bank's website...");

    // Get the selected bank value
    const selectedBank = document.getElementById("bank").value;

    // Update the form action based on the selected bank
    switch (selectedBank) {
        case "AGRONet":
            window.open("https://www.agronet.com.my/rib/common/Login.do", "_blank");
            break;

        case "AmBank":
            window.open("https://www.ambank.com.my/eng/", "_blank");
            break;

            case "BSN" :
                bankForm.action = "https://www.mybsn.com.my/mybsn/login/login.do";
                break;

            case "Bank Islam":
                bankForm.action ="https://www.bankislam.biz/";
                break;

            case "Bank Muamalat":
                bankForm.action = "https://www.muamalat.com.my/";
                break;

            case "Bank Rakyat" : 
                bankForm.action = "https://www.bankrakyat.com.my/";
                break;

            case "CIMB Clicks":
                bankForm.action = "https://www.cimbclicks.com.my/";
                break;


            case "Maybank2U":
                bankForm.action ="https://www.maybank2u.com.my/home/m2u/common/login.do";
                break;

            case "Public Bank":
                bankForm.action = "https://www.pbebank.com/";
                break;

            case "RHB Bank":
                bankForm.action = "https://www.rhbgroup.com/index.html";
                break;

            default:
            console.error("Invalid bank selection");
            return;
    }

    // Display a delayed message and redirect
    setTimeout(function () {
        alert("Payment successful! Redirecting...");
        window.location.href = "updateStatus.php";
    }, 5000); // Wait for 5 seconds before redirecting
}

// Add an event listener to the form submission
document.getElementById("bankForm").addEventListener("submit", function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Validate the bank selection
    if (!validateBankSelection()) {
        return;
    }

    // Call the completePayment function after validating the bank selection
    completePayment();
});

function validateBankSelection() {
    const bankSelect = document.getElementById("bank");

    // Check if a bank is selected
    if (bankSelect.value === "") {
        alert("Please choose your preferred bank before proceeding.");
        return false; // Prevent form submission
    }

    // Continue with form submission if a bank is selected
    return true;
}
</script>
</body>
</html>
</body>
</html>
