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
            margin: 10px 0;
        }

        .text
        {
            background-color: indianred;
            font-size: 35px;
            width: 100%;
            margin-top: 170px;
        }

         .button-container {
            display: flex;
            justify-content: center; /* Center the buttons horizontally */
            align-items: center; /* Center the buttons vertically */
            margin-top: 180px; /* Add margin to separate from the table */
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
                <img src="logo.png" alt="Image 1" width="340" style="margin-right: 90px;">
                <img src="maralogo.png" alt="Image 2" width="150" style="margin-right: 70px;">
            </div>
        </div>

        <div class="text">
            <p><strong>Payment Status: </strong><a style="color: white;">Cancel</a>
        </div>

        <div class="button-container">
            <form action="home.php" method="get">
                <input type="submit" value="OK" class="back-button">
            </form>
