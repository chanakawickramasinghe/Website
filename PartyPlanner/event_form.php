<?php require_once('connect.php'); ?>
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
	
		<title> Event Form - PartyPlanner.com</title>
		<script  src="javascript/eventform.js"></script>
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        
	</head>
	
	<style>
	
	h1{
			color:white;
	  }
	
	
	</style>
	
	
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
        <br>
		<div class="header">
			<h2> Event Form </h2>
		</div>
	
		<form method="POST" action ='' name="form" onSubmit="return checkForm()">

		
		<table>
		  <tr>
			 <td>
                <label>Name of the Event</label>
            </td>
              <td>
				<div class="input-group-cd">
                <input type="text" name="event_name" placeholder="Your preferred event name">
				</div>
             </td>
				
				
				
		    </tr>
			
			<tr>
                <td>
                    <label>Event Type</label>
                </td>
                <td>
                    <div class="input-group-cd">
				    <select name="event_type">
					<option disabled selected value> -- Select Event Type -- </option>
					<option>Wedding Ceremonies</option>
					<option>Birthday Parties</option>
					<option>Graduation Parties</option>
				    </select>
			         </div>
                </td>
            </tr>
				
             <tr>   
				<td>
                    <label>Package</label>
				</td>
				
				<td>
                <div class="input-group-cd">
				<select name="package">
					<option disabled selected value> -- Select the Package -- </option>
					<option>The Wish Planning Package</option>
					<option>The Dream Planning Package</option>
					<option>The Birthday Bash Package</option>
					<option>The Booming Joy Package</option>
					<option>The Celebration of Success Package</option>
					<option>the Graduated Package</option>
					<option></option>
				</select>	
				</div>
				</td>
				
			<tr>
				<td>
					
					<label>Venue</label>
                   
				</td>
				
				<td>
                    <div class="input-group-cd">
					<input type="text" name="venue" placeholder="Enter Your Venue">
					</div>
				</td>
				
			<tr>
				<td>	
					
					<label>Date</label>
				</td>
				
				<td>
                    <div class="input-group-cd">
					<input type="date" name="date">
					</div>
				</td>
				
			<tr>
				<td>
					
					<label>Start-Time</label>
				</td>
				
				<td>
                    <div class="input-group-cd">
					<input type="time" name="start_time">
					</div>
				</td>
				
			<tr>
				<td>
					
					<label>End-Time</label>
				</td>
				
				<td>
                    <div class="input-group-cd">
					<input type="time" name="end_time">
					</div>
				</td>
				
			<tr>
				<td>
					
					<label>No of Participants</label>
				</td>
				
				<td>
                    <div class="input-group-cd">
					<input type="number" name="num" placeholder="Enter number of Participants">
					</div>
				</td>
				
			<tr>

				<td colspan="2">
					<div class="input-group">
                    <center>
                        <button type="submit" class="btn" name="submit">Create Event</button>
					       &nbsp;&nbsp;
					       <button type="reset" class="btn" name="cancel_btn"> Cancel </button>
					
                    </center>
                    </div>
					
				</td>
            </tr>
            </table>
	</form>
	</body>		
</html>
			
<?php

if(isset($_POST['submit'])) {
    $event_name = $_POST["event_name"];
    $event_type = $_POST["event_type"];
    $package = $_POST["package"];
    $venue = $_POST["venue"];
    $date = $_POST["date"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $num = $_POST["num"];
    
    $s = "SELECT * FROM events";

    $result = mysqli_query($connection, $s);

    $num = mysqli_num_rows($result);
    
    $reg="INSERT INTO events(username,event_name, event_type, package, venue, date, start_time, end_time, num) VALUES('".$_SESSION["username"]."','".$_POST['event_name']."','".$_POST['event_type']."','".$_POST['package']."','".$_POST['venue']."','".$_POST['date']."','".$_POST['start_time']."','".$_POST['end_time']."','".$_POST['num']."');";
    
    if(mysqli_query($connection , $reg) === TRUE) {
            echo "<script>alert('Event details sent, Our agent will contact you within a short time.');</script>";
            header('Location:event_form.php');
            exit(); 
        }
        else{
            echo "<script>alert('Send failed, please retry.');</script>";
            header('Location:event_form.php');
            exit();
        }
}

mysqli_close($connection);
?>			
			
			
			
			
			
			
		
	