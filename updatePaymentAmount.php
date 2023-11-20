<?php
// Include your database connection code here

// Check if the required data is present
if (isset($_POST['studID']) && isset($_POST['paymentAmount'])) {
    $studID = $_POST['studID'];
    $paymentAmount = $_POST['paymentAmount'];

    // Update the database with the provided payment amount
    $updateQuery = "UPDATE infoadminn SET paymentAmount = '$paymentAmount', paymentStatus = 'Paid' WHERE studID = '$studID'";
    $updateResult = $conn->query($updateQuery);

    if ($updateResult) {
        // Database update successful
        echo 'success';
    } else {
        // Database update failed
        echo 'error';
    }
} else {
    // Required data not provided
    echo 'error';
}
?>
