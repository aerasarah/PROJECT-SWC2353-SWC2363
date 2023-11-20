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
            margin-top: 50px;
            align-items: center;
        }

        .header-img 
        {
            display: flex;
            justify-content: center; /* Center images horizontally */
            align-items: center; /* Center images vertically */
            margin: 0px 0;
        }

       
        .content {
        background-color: beige;
        padding: 20px;
        text-align: center;
        width: 100%; 
        max-width: 1600px;
        margin-top: 60px;
        align-items: center;
        border: 2px solid #333; /* Add a border around the content */
        border-radius: 20px; /* Add rounded corners to the border */
        line-height: 2.0;
    }

   .content-info{
            background-color: beige;
            padding: 20px;
            text-align: center;
            width: 100%; 
            max-width: 1600px;
            margin-top: 10px;
            align-items: center;
        }

        .content p {
            font-size: 22px;
        }

        .contact-info {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
            margin-right: 200px;
            font-size: 23px;
            
        }

        .contact-info p {
            margin: 30px;
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
            margin-top: -10px;
            margin-bottom: 50px;
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
                <img src="maralogo.png" alt="Image 2" width="150" style="margin-right: 70px;">
            </div>
        </div>
        <div class="content">
            <p >
                <b>UPTM</b> is a <b>higher learning institute</b> that nurtures students with moral values and humanity in every aspect of learning and human capital development, while ensuring every individual are given equal opportunity to shape their success in the professional scope through a variety of technology and knowledge. This is what UPTM is all about, offering recognised certification and transforming graduates into professionals of high standards of morality.<p>
            </p>
        </div>
        <div class="content-info">
            <div class="contact-info">
                <p style="margin-left: 160px; margin-top: 33px;"><strong>General Line:</strong><br>+603 9206 9700<br><br><strong>Tel:</strong><br>+603 92837186 (Marketing)</p>
                <p style="margin-right: 20px;"><strong>Address:</strong><br>UNIVERSITI POLY-TECH MALAYSIA,<br><br>Jalan 6/91, Taman Shamelin Perkasa,<br> 56100 Cheras, Kuala Lumpur</p>
                <p style="margin-right: -10px; margin-top: 28px;"><strong>Fax:</strong><br> +603 92810475<br><br><strong>E-mail:</strong><br>marketing@uptm.edu.my</p>
            </div>
        </div>


    <div class="button">
        <br><br><input type="submit" value="Back" class="back-button">
    </div>
    </div>
     
    </form>
</body>
</html>
