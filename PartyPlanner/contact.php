<?php require_once('connect.php'); ?>
<?php include('session.php') ?>
<html>
    <head>
		<meta charset="utf-8">
		<title> ContactUS - PartyPlanner.com </title>
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <script  src="javascript/contact.js"></script>
    </head>
    <body>
        <nav>
                <label class="logo">Party Planner</label>
                <ul>
                     <li><a href="home.html">Home</a></li>
					<li><a href="HowItWorks.html">HowItWorks</a></li>
					<li><a href="Pricing.html">Pricing</a></li>
					<li><a href="event_form.php">Event Form</a></li>
					<li><a href="contact.php">contact</a></li>
                    <li> <a href="login.php"> Logout</a></li>
                   
                </ul>
        </nav>
        <br>
        <div class="header">
			<h2>Contact Us</h2>
		</div>
        <form method="POST" name="form" onSubmit="return checkForm()">
			<p>Have ideas or concerns you want to share with us? Something we can improve? Please send us your feedback.We appreciate your helping us make PartyPlanner the very best it can be. Thank you!
			</p> <br>
        
        <div class="input-group">
			<label> Your name </label>
			<input type="text" name="yname" size="55" placeholder="Enter Your Name" >
		</div>
		<div class="input-group">
			<label> Your Email </label>
			<input type="email" name="email" size="55"  placeholder="Enter Your Email">
		</div>
		<div class="input-group">
			<label> Your message<font color="red">*</font> </label>
			<input type="text" name="message" size="250" height="50"  placeholder="Enter Your Message">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="submit">Send</button>
			<button type="reset" class="btn" name="cancel_btn"> Cancel </button>
		</div>
		<font color="red">*</font>required field
        </form> 
    </body>
<html>
    
<?php

if(isset($_POST['submit'])) {
//    $yname = $_POST["yname"];
//    $email = $_POST["email"];
//    $message = $_POST["message"];  

    $s = "SELECT * FROM messages";

    $result = mysqli_query($connection, $s);

    $num = mysqli_num_rows($result);
    
    $reg="INSERT INTO messages(yname, email, message) VALUES ('".$_POST['yname']."','".$_POST['email']."','".$_POST['message']."');";
    
    
        if(mysqli_query($connection , $reg) === TRUE) {
            echo "<script>alert('Message Sent Successfully');</script>";
            header('Location:contact.php');
            exit(); 
        }
        else{
            echo '<script language="text/javascript">';
            echo 'alert("Message Sent Failed")';
            echo '</script>';
            header('Location:contact.php');
            exit();
        }
    
}

mysqli_close($connection);
?>