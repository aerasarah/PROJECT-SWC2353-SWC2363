<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
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
            margin-top: 20px;
            align-items: center;
        }

        .header-img 
        {
            display: flex;
            justify-content: center; /* Center images horizontally */
            align-items: center; /* Center images vertically */
            margin: 10px 0;
        }

        .images
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .text-title
        {
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        .text-content
        {
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .box-items
        {
            padding: 5px;
            width: 1000px; 
            margin-top: 200px;
            align-items: center;
            border: 2px solid #333; /* Add a border around the content */
            border-radius: 20px; /* Add rounded corners to the border */
            height: 550px;
            margin-top: 50px;
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
<body>
    <body style="background-color: beige;">
       <form action="home.php" method="get">
    <div class="container">
        <div class="header">
            <div class="header-img">
                <img src="logo.png" alt="Image 1" width="340" style="margin-right: 90px;">
                <img src="maralogo.png" alt="Image 2" width="150" style="margin-right: 20px;">
            </div>
        </div>

        <div class="box-items" style="height: 800px;">
            <div class="text-title">
            <p><b>STEP 1</p>
                <div class="text-content">
                    <p>To login, please enter your student ID and IC number,</p>
                    <a>then click "Login" button to proceed.</a>
                </div>
            </div>
            <div class="images">
            <img src="loginnn.png" alt="Welcome Flexi Image" width="430">
        </div>
    </div>
    <div class="box-items" style="height: 1040px;">
            <div class="text-title">
            <p><b>STEP 2</p>
                <div class="text-content">
                    <p>After successfully login, please ensure that your details are accurate </p>
                    <a>by navigating to your "Profile" to review them.</a>
                </div>
            </div>
            <div class="images">
            <p><img src="home.png" alt="Welcome Flexi Image" width="700">
        </div>
        <div class="images">
        <p><img src="studdetails.png" alt="Welcome Flexi Image" width="700">
    </div>
    </div>
    <div class="box-items" style="height: 670px;">
            <div class="text-title">
            <p><b>STEP 3</p>
                <div class="text-content">
                    <p>To make a payment for your fees,  </p>
                    <a>simply head over to the "Payment Fees" section.</a>
                </div>
            </div>
            <div class="images">
            <p><img src="home.png" alt="Welcome Flexi Image" width="700">
        </div>
    </div>
    <div class="box-items" style="height: 530px;">
            <div class="text-title">
            <p><b>STEP 4</p>
                <div class="text-content">
                    <p>Enter or select the desired price to be paid in the provided space.  </p>
                </div>
            </div>
            <div class="images">
            <p><img src="studentp.png" alt="Welcome Flexi Image" width="800">
        </div>
    </div>
    <div class="box-items" style="height: 520px;">
            <div class="text-title">
            <p><b>STEP 5</p>
                <div class="text-content">
                    <p>Verify that the total amount is accurate, </p>
                    <a>then click the "Confirm" button to proceed. </a>
                </div>
            </div>
            <div class="images">
            <p><img src="total.png" alt="Welcome Flexi Image" width="620">
        </div>
    </div>
    <div class="box-items" style="height: 1000px;">
            <div class="text-title">
            <p><b>STEP 6</p>
                <div class="text-content">
                    <p>Please makesure that the information in all section is correct and the total amount is accurate.</p>
                    <a>Then, click the "Confirm" button to proceed.</a>
                </div>
            </div>
            <div class="images">
            <p><img src="alldetailss.png" alt="Welcome Flexi Image" width="850">
        </div>
    </div>
    <div class="box-items" style="height: 780px;">
            <div class="text-title">
            <p><b>STEP 7</p>
                <div class="text-content">
                    <p>Recheck and ensure the amount to be paid is correct.</p>
                    <a>Select your preferred bank for the transaction and click the "Proceed" button to continue.</a>
                </div>
            </div>
            <div class="images">
            <p><img src="confirmation.png" alt="Welcome Flexi Image" width="720" height="500px">
        </div>
    </div>
    <div class="box-items" style="height: 830px;">
            <div class="text-title">
            <p><b>STEP 8</p>
                <div class="text-content">
                    <p>You will be redirect to online banking login page.</p>
                    <p>Login with your user information to make payment.</p>
                    <a>Enter the payment amount and bank account and proceed to the payment.</a>
                </div>
            </div>
            <div class="images">
            <p><img src="maybank.png" alt="Welcome Flexi Image" width="720" height="500px">
        </div>
    </div>

    <p><div class="button-container">
    <form action="home.php" method="get">
        <input type="submit" value="Back" class="back-button">
    </form>
