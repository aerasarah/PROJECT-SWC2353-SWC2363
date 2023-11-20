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

        <div class="box-items">
            <div class="text-title">
            <p><b>WELCOME</p>
                <div class="text-content">
                    <p>Welcome to the UPTM FLEXIPAY System User Guide.</p>
                    <a>Please read through to the final step or click the "Close" button to exit.</a>
                </div>
            </div>
            <div class="images">
            <img src="welcomeflexi.png" alt="Welcome Flexi Image" width="400">
        </div>
    </div>

    <div class="button-container">
        <form action="home.php" method="get">
            <input type="submit" value="Close" class="back-button">
        </form>
        <form action="details.php" method="post">
                <input type="submit" value="Continue" class="confirm-button">
            </form>
    </div>
</div>

            
