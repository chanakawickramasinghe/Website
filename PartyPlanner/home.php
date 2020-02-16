<?php
session_start();
if (! empty($_SESSION['logged_in']))
{
}
else
{
    
//    echo "<script>alert('Please login to continue');</script>";
    header("Location: not_logged.php");
//
}
?>

<html>
    <head>
        <meta charset="utf-8">
		<title> ContactUS - PartyPlanner.com </title>
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
    </head>

    <body>
        <nav>
            <label class="logo">Party Planner</label>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="HowItWorks.php">HowItWorks</a></li>
				<li><a href="Pricing.php">Pricing</a></li>
                <li><a href="event_form.php">Event Form</a></li>
                <li><a href="contact.php">contact</a></li>
                <li> <a href="logout.php"> Logout</a></li>   
            </ul>
        </nav>
        <marquee direction="left"><font color="#DD0000", size="16px", type="helvetica"> Welcome to Party Planner!</font></marquee>
        <p><font size="5px">Congratulations,you have made a smart decision and taken your 1<sup>st</sup> step to celebrate your special day with your loved ones 
without having to excessively worry about planing it and getting everything right. Beacuse 
we will help you put together the perfect ceremony that youwill cherrish for the rest of your lives.
Surf our web site for more details and select from the range of different customizable options
to create your own event!</font></p>

<img src="images/homepage/party3.jpg" align="left" width="70%" height="79%">
<img src="images/homepage/party1.jpeg" align="right" width="29%"> 
<img src="images/homepage/party2.jpg" align="right" width="29%">
    </body>
</html>