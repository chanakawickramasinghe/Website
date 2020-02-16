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
<!DOCTYPE HTML>
<html id="top">
	<head>
		<meta charset="utf-8">
		<title> Pricing - PartyPlanner.com </title>
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
                    <li><a href="logout.php"> Logout</a></li>
                   
                </ul>
        </nav>
        <br>
		<div class="header">
			<h2>Pricing</h2>
		</div>
		<form>
			Below is a list of available packages for event websites with online RSVP created on PartyPlanner.

			We have arranged our packages according to the best prices and to suit the needs of our valuable customers.  

		<br>
		<h2>We cover</h2>
			<a href="#wed"><font size=4>Wedding ceremonies</font></a><br>
			<a href="#bd"><font size=4>Birthday Parties</font></a><br>
			<a href="#grad"><font size=4>Graduation Parties</font></a><br>
		</form>
		<br>
		<br>
<p id="wed">
<img src="images/pricing/wed1.jpg" width="450" height="350" alt="wed1" topic="wed1" style="float: left; margin-right:75px; margin bottom:10px;
border:solid black 1px;padding:5px;">
<font size="6"><b>The Wish Planning Package</b></font>
	<br>
<i>Day of coordination services</i>
	<br>
	<br>
One Event Coordinator on-site for day of coordination services (for 10 hours)<br>
Event Coordinator on-site for event rehearsal (maximum of one hour or plus one hour on-site day of)<br>
Two – one hour long consultations prior to event date


<ul style="list-style-type:disc;">
	<li>Prepare detailed day-of timeline</li>
	<li>Vendor coordination and logistics</li>
	<li> Design of floor plans and layouts</li>
	<li>Event design assistance</li>
	<li>Everything included in the Wish Package</li>
	*Additional travel fee may apply for rehearsal/multiple venues
</ul>
		</p>
	<br>
<textarea rows="2" cols="20">
    RS.6000 per head
    </textarea>
	<br>
	<br>
	<br>
	<br>
<p>
<img src="images/pricing/wed2.jpg" width="450" height="350" alt="wed2" title="wed2" style="float: left; margin-right: 75px; margin bottom:10px;
border:solid black 1px;padding:5px;">
<font size="6"><b>The Dream Planning Package</b></font>
	<br>
<i>Assist with all aspects of planning</i>
	<br>
	<br>
A dedicated team of event staff on-site for day of coordination services (for 10 hours per staff member)<br>
A dedicated team of event staff on-site for event rehearsal (maximum of one hour per staff member)<br>
Unlimited email and phone contact


<ul style="list-style-type:disc;">
	
<li> All event logistics</li>
<li>Prepare detailed timelines, checklists, and any other documents</li>
<li>RSVP/Invitation management</li>
<li>Budget creation/management</li>
<li>Venue and vendor sourcing, contracts and negotiations, management and coordination</li>
<li>Decor design and execution</li>
<li>Transportation of items from ceremony to reception</li>
<li>Everything included in the Desire and Wish Package</li>
</ul>
	<br>
<textarea rows="2" cols="20">
    RS.7500 per head
    </textarea>
	<br>
	<br>
	<br>
	<br>
		</p>
<p id="bd">
<img src="images/pricing/bd1.jpg" width="450" height="350" alt="bd1" title="bd1" style="float: left; margin-right:75px; margin bottom:10px;
border:solid black 1px;padding:5px;">
<font size="6"><b>The Birthday Bash Package</b></font>
	<br>
<i>Assist with all aspects of planning</i>
	<br>
	<br>

A dedicated team of event staff on-site for day of coordination services (max of 10 hours per staff member)<br>
Unlimited email and phone contact

		
<ul style="list-style-type:disc;">
<li>Prepare detailed timeline, checklists, and any other necessary documents</li>
<li>RSVP/Invitation management</li>
<li>Budget creation/management</li>
<li>Venue sourcing, contracts and negotiations</li>
<li>Vendor sourcing, management and coordination</li>
<li>Event decor design and execution</li>
<li>Everything included in the City Corporate Package</li>
</ul>
	<br>
<textarea rows="2" cols="20">
    RS.2500 per head
    </textarea>
	<br>
	<br>
	<br>
	<br>
		</p>
<p>
<img src="images/pricing/bd2.jpg" width="450" height="350" alt="bd2" title="bd2" style="float: left; margin-right:75px; margin bottom:10px;
border:solid black 1px;padding:5px;">
<font size="6"><b>The Booming Joy Package</b></font>
	<br>
<i>Assist with all aspects of planning</i>
	<br>
	<br>
A dedicated team of event staff on-site for day of coordination services (for 10 hours per staff member)<br>
A dedicated team of event staff on-site for event rehearsal (maximum of one hour per staff member)<br>
Unlimited email and phone contact

	
<ul style="list-style-type:disc;">
	
<li> All event logistics</li>
<li>Prepare detailed timelines, checklists, and any other documents</li>
<li>RSVP/Invitation management</li>
<li>Budget creation/management</li>
<li>Venue and vendor sourcing, contracts and negotiations, management and coordination</li>
<li>Decor design and execution</li>
<li>Transportation of items from ceremony to reception</li>
<li>Everything included in the Desire and Wish Package</li>
	<br>
<textarea rows="2" cols="20">
    RS.3000 per head
    </textarea>
	<br>
	<br>
	<br>
	<br>
		</p>
<p id="grad">
<img src="images/pricing/grad1.jpg" width="450" height="350" alt="grad1" title="grad1" style="float: left; margin-right:75px; margin bottom:10px;
border:solid black 1px;padding:5px;">
<font size="6"><b>The Graduated Package</b></font>
	<br>
<i>Assist with all aspects of planning</i>
	<br>
	<br>
A dedicated team of event staff on-site for day of coordination services (for 10 hours per staff member)<br>
A dedicated team of event staff on-site for event rehearsal (maximum of one hour per staff member)<br>
Unlimited email and phone contact

<ul style="list-style-type:disc;">
	
<li> All event logistics</li>
<li>Prepare detailed timelines, checklists, and any other documents</li>
<li>RSVP/Invitation management</li>
<li>Budget creation/management</li>
<li>Venue and vendor sourcing, contracts and negotiations, management and coordination</li>
<li>Decor design and execution</li>
<li>Transportation of items from ceremony to reception</li>
<li>Everything included in the Desire and Wish Package</li>
</ul>
		
	<br>
<textarea rows="2" cols="20">
    RS.3500 per head
    </textarea>
	<br>
	<br>
	<br>
	<br>
		</p>	
<p>
<img src="images/pricing/grad2.jpg" width="450" height="350" alt="grad2" title="gard2" style="float: left; margin-right:75px; margin bottom:10px;
border:solid black 1px;padding:5px;">
<font size="6"><b>The Celebartion of Success Package</b></font>
	<br>
<i>Day of coordination services</i>
	<br>
	<br>
One Event Coordinator on-site for day of coordination services (for 10 hours)<br>
Event Coordinator on-site for event rehearsal (maximum of one hour or plus one hour on-site day of)<br>
Two – one hour long consultations prior to event date


<ul style="list-style-type:disc;">
	<li>Prepare detailed day-of timeline</li>
	<li>Vendor coordination and logistics</li>
	<li> Design of floor plans and layouts</li>
	<li>Event design assistance</li>
	<li>Everything included in the Wish Package</li>
	*Additional travel fee may apply for rehearsal/multiple venues
</ul>
	<br>
<textarea rows="2" cols="20">
    RS.4000 per head
    </textarea>
	<br>
	<br>
		</p>
<a href="#top" align="right">take me to the top of the page</a>
	</body>
</html>