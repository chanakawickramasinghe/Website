<?php require_once('connect.php'); ?>
<?php include('session.php') ?>
<html>
	<head>
	
		<title> Event Form - PartyPlanner.com</title>
		<script  src="javascript/customer_details.js"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<style>
	
	h1{
			color:white;
	  }
	
	
	</style>
	
	
	<body>
		<div class="header">
			<h2> Event Form </h2>
		</div>
	
		<form method="POST" action ='' onSubmit="return checkForm()">

		
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
					<option disabled selected value> -- Select an Option -- </option>
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
					<option disabled selected value> -- Select an Option -- </option>
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
					<input type="text" name="venue">
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
					<input type="number" name="num">
					</div>
				</td>
				
			<tr>

				<td colspan="2">
					<div class="input-group">
                    <center>
                        <button type="submit" class="btn" name="submit">Register</button>
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
    
    echo "hehubhvehbv";
    
    $s = "SELECT * FROM events";

    $result = mysqli_query($connection, $s);

    $num = mysqli_num_rows($result);
    
    $reg="INSERT INTO events(event_name, event_type, package, venue, date, start_time, end_time, num) VALUES('".$_POST['event_name']."','".$_POST['event_type']."','".$_POST['package']."','".$_POST['venue']."','".$_POST['date']."','".$_POST['start_time']."','".$_POST['end_time']."','".$_POST['num']."');";
    
    if(mysqli_query($connection , $reg) === TRUE) {
            $message = base64_encode(urlencode("Successfully Send message"));
            header('Location:event_form.php?msg=' . $message);
            exit(); 
        }
        else{
            $message = base64_encode(urlencode("Error"));
            header('Location:contact.php?msg=' . $message);
            exit();
        }
}

mysqli_close($connection);
?>			
			
			
			
			
			
			
		
	