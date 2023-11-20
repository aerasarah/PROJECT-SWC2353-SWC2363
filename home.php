<html>
<head>
	<style>

		body
		{
			font-family: Arial, sans-serif;
			margin: 0px;
			padding: 0px;
		}

		header
		{
			background-color: blanchedalmond;
			color: black;
			padding: 0px 0;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
		}

		.logo
		{
			display: flex;
			align-items: center;
            margin-right: 90px;
            margin-top: -60px;
            margin-bottom: 30px;
		}

		.element 
		{
			display: flex;
			align-items: center;
			font-size: 50px;
			margin: 10px;
            margin-right: 80px;
		}

         .element img 
        {
            margin: 0 40px; 
        }

        .logout-img
        {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            margin-left: 1700px;

        }

        .logout-container 
        {
            display: flex;
            flex-direction: column;
            align-items: center;
        }


	</style>

	<title>HOME</title>
</head>
<body>

	<header>

        <div class="logout-img">
    <div class="logout-container">
        <a href="login.html"><img src="logoutpic.png" alt="Image 3" width="160px" class="button-link"></a>
    </div>
</div>
		<div class="logo">
			<div class="element"><img src="logo.png" width="300" style="margin-top: -30px;"></div>
			<div class="element" style="margin-top: -75px"><strong>WELCOME TO</strong></div>
			<div class="element"><img src="maralogo.png" width="140" style="margin-top: 3px;"></div>
		</div>
        <div class="element" style="margin-top: -110px; margin-bottom: 30px; margin-left: 73px; text-align: center;"><strong>FLEXIPAY</strong></div>


    </header>

    <body style="background-color: beige;">


</body>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
        }

        .column {
            text-align: center;
            padding: 0px 10px;
            margin: 2px -145px;
        }

        .coloum-middle
        {
            align-items: center;
            margin-left: -100px ;
            margin-top: 180px;
             text-decoration-line: none; /* Remove underline */
            transition: background-color 0.3s; /* Add a smooth color transition on hover */
            cursor: pointer;
            display: block;
            transition: background-color 0.6s; /* Add a smooth color transition on hover */
             text-decoration-line: none; /* Remove underline */
        }

        .button{
            background-color: lightcoral;
            color: black;
            font-size: 40px;
            cursor: pointer;
            width: 350px; /* Fixed width */
            height: 100px; /* Fixed height */
            display: block;
            margin: 100px auto;
            margin-left: 400;
            text-decoration-line: none; /* Remove underline */
            transition: background-color 0.3s; /* Add a smooth color transition on hover */
        }

        .button:hover 
        {
            background-color: lightsalmon;
        }

        .button a {
            text-decoration: none; /* Remove underline */
            color: black; /* Set the link text color */
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
            position: relative;
        }

        .button-container:hover .dropdown {
            display: block;
        }



    </style>
</head>
<body>
    <div class="container">
        <div class="column">
            <button class="button transparent-button" style="margin-bottom: 250px;"><a href="profile.php" class="button-link">Profile</a></button>
           <button class="button"><a href="references.php" class="button-link">Payment Reference</a></button>

        </div>

        <div class="coloum-middle">
           <button class="button"><a href="studentpayment.php" class="button-link">Payment Fees</a></button>
            </div>

       <div class="column" style="margin-left: -240px;">
            <button class="button" style="margin-bottom: 250px;"><a href="usermanual.php" class="button-link">User Manual</a></button>
            <button class="button"><a href="contactus.php" class="button-link">Contact Us</a></button>
        </div>
    </div>

</body>
</html>
