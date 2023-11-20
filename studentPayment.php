<?php
session_start();

if (isset($_GET['totalAmount'])) {
    $_SESSION['totalAmount'] = floatval($_GET['totalAmount']);
} elseif (isset($_SESSION['totalAmount'])) {
    // Total amount already exists in the session, no need to override it.
} else {
    // Handle the case where totalAmount is not set.
}

if (isset($_GET['tuitionFees'])) {
    $_SESSION['tuitionFees'] = floatval($_GET['tuitionFees']);
} elseif (isset($_SESSION['tuitionFees'])) {
    // Total amount already exists in the session, no need to override it.
} else {
    // Handle the case where totalAmount is not set.
}

if (isset($_GET['adminFees'])) {
    $_SESSION['adminFees'] = floatval($_GET['adminFees']);
} elseif (isset($_SESSION['adminFees'])) {
    // Total amount already exists in the session, no need to override it.
} else {
    // Handle the case where totalAmount is not set.
}

if (isset($_GET['hostelFees'])) {
    $_SESSION['hostelFees'] = floatval($_GET['hostelFees']);
} elseif (isset($_SESSION['hostelFees'])) {
    // Total amount already exists in the session, no need to override it.
} else {
    // Handle the case where totalAmount is not set.
}

if (isset($_GET['compoundFees'])) {
    $_SESSION['compoundFees'] = floatval($_GET['compoundFees']);
} elseif (isset($_SESSION['compoundFees'])) {
    // Total amount already exists in the session, no need to override it.
} else {
    // Handle the case where totalAmount is not set.
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
            margin-top: 80px;
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

        .payment {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-select {
            position: relative;
            display: flex;
            align-items: center;
        }

        .custom-select select {
            display: none;
        }

        .select-box {
            background-color: wheat;
            border: 1px solid black;
            border-radius: 90px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            margin-left: 10px;
        }

        .select-box .arrow {
            width: 0;
            height: 0;
            border: 5px solid transparent;
            border-left: 8px solid #000;
            margin-right: 10px;
        }

        .custom-options {
            display: none;
            border: 1px solid #ccc;
            border-radius: 10px;
            max-height: 160px;
            overflow-y: auto;
            position: absolute;
            top: 100%;
            background-color: wheat;
            max-width: 100%;
            width: 200px;
        }

        .custom-options.active {
            display: block;
        }

        .custom-option {
            padding: 10px;
            cursor: pointer;
        }

        .custom-option:hover {
            background-color: silver;
        }

        .select-box .arrow {
            width: 0;
            height: 0;
            border: 5px solid transparent;
            border-top: 10px solid #000;
            margin-left: 60px;
        }

        .box-items
        {
            padding: 5px;
            width: 1100px; 
            margin-top: 200px;
            align-items: center;
            border: 2px solid #333; /* Add a border around the content */
            border-radius: 20px; /* Add rounded corners to the border */
            height: 350px;
            margin-top: 200px;
        }

        .box-total
        {
            padding: 5px;
            width: 600px; 
            margin-top: 200px;
            align-items: center;
            border: 2px solid #333; /* Add a border around the content */
            border-radius: 20px; /* Add rounded corners to the border */
            height: 90px;
            margin-top: 50px;
        }


        .bank-selection-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
            justify-content: space-between;
            font-size: 22px;
        }

        .bank-selection-container label {
            margin-right: -10px;
            width: 300px;
        }

        .custom-select select {
    display: flex;
    width: 200px; /* Adjust the width as needed */
    height: 40px; /* Adjust the height as needed */
    font-size: 18px;
    align-items: center;

}

.bank-selection-container:nth-child(2) {
            margin-left: 100px; /* Adjust the margin as needed */
        }

         .text {
            font-size: 20px;
            text-align: center;
            justify-content: center;
            
        }

        .text c
        {
            justify-content: center;
            align-items: center;
            position: relative; /* Set the position to relative */
        }

        .button-container {
            display: flex;
            justify-content: center; /* Center the buttons horizontally */
            align-items: center; /* Center the buttons vertically */
            margin-top: 70px; /* Add margin to separate from the table */
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
             <p><p><div class="payment" style="margin-top: 30px;">
            <p><b> ~ PAYMENT ITEMS ~ </b></p>
        </div>
        <div class="bank-selection-container">
            <div class="custom-select" style="margin-top: 30px; margin-left: -50px;">
                <label for="tuitionFees"><b style="margin-right: -80px;">TUITION FEES:</b></label>
                <input type="number" id="tuitionFees" name="tuitionFees" value=""<?php echo isset($_POST['tuitionFees']) ? $_POST['tuitionFees'] : ''; ?> placeholder="Enter Amount" style=" text-align: center; width: 235px; height: 40px; margin-left: -5px; font-size: 19px;">
            </div>
        </div>

        <div class="bank-selection-container">
            <div class="custom-select" style="margin-top: 60px; margin-left: 10px;">
                <label for="adminFees"><b>ADMINISTRATIVE FEES:</b></label>
                <select type = "hidden" id="adminFees" name="adminFees"  value="" style="margin-left: 0px;">
                    <option value="" data-amount="0">Choose...</option>
                    <option value="bank1" data-amount="50">RM50</option>
                    <option value="bank2" data-amount="260">RM260</option>
                    <option value="bank3" data-amount="310">RM310</option>
                </select>
            </div>
        </div>

             <div class="bank-selection-container">
            <div class="custom-select" style="margin-left: 650px; margin-top: -280px;">
                <label for="hostelFees"><b style="margin-right: 140px;">HOSTEL FEES:</b></label>
                <select type = "hidden" id="hostelFees" name="hostelFees" value="" style="margin-left: -120px; margin-right: 0px;"readonly>
                    <option value="" data-amount="0">Choose...</option>
                    <option value="bank4" data-amount="200">RM200<headoption>
                    <option value="bank5" data-amount="400">RM400</option>
                    <option value="bank6" data-amount="600">RM600</option>
                    <option value="bank7" data-amount="800">RM800</option>
                    </select>
                </div>
            </div>

            <div class="bank-selection-container">
            <div class="custom-select" style="margin-top: -80px; margin-left: 540px;">
                <label for="compoundFees"><b style="margin-right: -40px;">COMPOUND FEES:</b></label>
                <input type="number" id="compoundFees" name="compoundFees" value=""<?php echo isset($_POST['compoundFees']) ? $_POST['compoundFees'] : ''; ?> placeholder="Enter Amount" style=" text-align: center; width: 235px; height: 40px; margin-left: -5px; font-size: 19px;">
            </div>
        </div>
        </div>

    </div>
            <div class="container">
            
                <div class="text">
                    <div class="box-total">
    <p><label style="margin-right: 10px;"><b>TOTAL AMOUNT (RM):</label>
    <input type="text" id="totalAmount" placeholder="Calculated Total" style="font-size: 20px; height: 35px; margin-top: 5px; text-align: center; margin-right: 30px;" readonly>
    </div>
    </div>

    <div class="button-container">
        <form action="home.php" method="get">
            <input type="submit" value="Back" class="back-button">
        </form>

        <form id="paymentForm" action="confirmation.php" method="get">
        <input type="hidden" id="totalAmountHidden" name="totalAmount" value="">
         <input type="hidden" id="tuitionFeesHidden" name="tuitionFees" value="">
    <input type="hidden" id="adminFeesHidden" name="adminFees" value="">
    <input type="hidden" id="hostelFeesHidden" name="hostelFees" value="">
    <input type="hidden" id="compoundFeesHidden" name="compoundFees" value="">
    <input type="button" value="Confirm" class="confirm-button" onclick="validateForm()">
</form>
    </div>


    <script>
        function validateForm()
        {
            const tuitionFeesInput = document.getElementById("tuitionFees");
            const adminFeesSelect = document.getElementById("adminFees");
            const hostelFeesSelect = document.getElementById("hostelFees");
            const compoundFeesInput = document.getElementById("compoundFees");
            const tuitionFeesHidden = document.getElementById("tuitionFeesHidden");
            const adminFeesHidden = document.getElementById("adminFeesHidden");
            const hostelFeesHidden = document.getElementById("hostelFeesHidden");
            const compoundFeesHidden = document.getElementById("compoundFeesHidden");

            // Check if any of the required fields are empty
            if (
                tuitionFeesInput.value.trim() === "" &&
                adminFeesSelect.value.trim() === "" &&
                hostelFeesSelect.value.trim() === "" &&
                compoundFeesInput.value.trim() === ""
            ) {
                alert("Please fill in at least one field.");
                return;
            }

            // Get the selected values or set them to 0 if not selected
            const tuitionFees = tuitionFeesInput.value ? parseFloat(tuitionFeesInput.value) : 0;
            const adminFees = adminFeesSelect.value ? parseFloat(adminFeesSelect.options[adminFeesSelect.selectedIndex].getAttribute("data-amount")) : 0;
            const hostelFees = hostelFeesSelect.value ? parseFloat(hostelFeesSelect.options[hostelFeesSelect.selectedIndex].getAttribute("data-amount")) : 0;
            const compoundFees = compoundFeesInput.value ? parseFloat(compoundFeesInput.value) : 0;

            // Set the hidden input fields with the selected amounts
            tuitionFeesHidden.value = tuitionFees;
            adminFeesHidden.value = adminFees;
            hostelFeesHidden.value = hostelFees;
            compoundFeesHidden.value = compoundFees;

            // If at least one field is filled, submit the form
            document.getElementById("paymentForm").submit();
        }

        // JavaScript to calculate the total amount
        const tuitionFeesInput = document.getElementById("tuitionFees");
        const adminFeesSelect = document.getElementById("adminFees");
        const hostelFeesSelect = document.getElementById("hostelFees");
        const compoundFeesInput = document.getElementById("compoundFees");
        const totalAmountInput = document.getElementById("totalAmount");

        const tuitionFeesNameInput = document.getElementById("tuitionFeesName");
        const adminFeesNameInput = document.getElementById("adminFeesName");
        const hostelFeesNameInput = document.getElementById("hostelFeesName");
        const compoundFeesNameInput = document.getElementById("compoundFeesName");


        // Add input event listeners to the input element
        tuitionFeesInput.addEventListener("input", calculateTotal);
        adminFeesSelect.addEventListener("change", calculateTotal);
        hostelFeesSelect.addEventListener("change", calculateTotal);
        compoundFeesInput.addEventListener("input", calculateTotal);

        function calculateTotal() {
            const tuitionFeesInput = document.getElementById("tuitionFees");
            const adminFeesSelect = document.getElementById("adminFees");
            const hostelFeesSelect = document.getElementById("hostelFees");
            const compoundFeesInput = document.getElementById("compoundFees");
            const totalAmountInput = document.getElementById("totalAmount");

            // Parse the values from input fields and select
            const tuitionAmount = parseFloat(tuitionFeesInput.value) || 0;
            const adminAmount = parseInt(adminFeesSelect.options[adminFeesSelect.selectedIndex].getAttribute("data-amount")) || 0;
            const hostelAmount = parseInt(hostelFeesSelect.options[hostelFeesSelect.selectedIndex].getAttribute("data-amount")) || 0;
            const compoundAmount = parseFloat(compoundFeesInput.value) || 0;

            // Calculate the total amount
    const total = tuitionAmount + adminAmount + hostelAmount + compoundAmount;

    // Update the "Total Amount" input field
    totalAmountInput.value = total.toFixed(2);

    // Update the hidden input for submission
    document.getElementById("totalAmountHidden").value = total.toFixed(2);


            // Add input event listeners to update the total when values change
            tuitionFeesInput.addEventListener("input", calculateTotal);
            adminFeesSelect.addEventListener("change", calculateTotal);
            hostelFeesSelect.addEventListener("change", calculateTotal);
            compoundFeesInput.addEventListener("input", calculateTotal);

            // Set the payment item names
            tuitionFeesNameInput.value = "Tuition Fees";
            adminFeesNameInput.value = adminFeesSelect.options[adminFeesSelect.selectedIndex].text;
            hostelFeesNameInput.value = hostelFeesSelect.options[hostelFeesSelect.selectedIndex].text;
            compoundFeesNameInput.value = "Compound Fees";
        }
    </script>

</body>
</html>
