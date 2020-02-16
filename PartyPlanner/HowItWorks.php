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
		<title> How it works - PartyPlanner.com </title>
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <style>
	  
	.img1{
			width:32%;
			float:left;
			height:45%;
			padding:5px;
		}
		
	.img2{
			width:32%;
			float:center;
			height:45%;
            padding: 5px;
		}
		
	.img3{
			width:32%;
			float:right;
			height:45%;
			padding:5px;
		}
	
	</style>
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
        <br>
	<div class="header">   
        <h2>We are here to suppot you!</h2>
    </div>
	<form background>
    <p>
		Deciding on your service offerings as a party 
		planner can be confusing when we are starting out.
		Every party planner will refine their services 
		to suit our needs, our market, and our clients. Here are the services, 
		we are providing currently.
	</p><br>
	
	<p align="center">
	<a href="#Catering">1.Catering Services</a><br><br>
	<a href="#Photography">2.Photography Services</a><br><br>
	<a href="#Entertainment">3.Entertainment Services</a><br><br>
	<a href="#Parking">4.Parking Services</a><br><br>
	</p>
    </form>
	
	<br><br>
	
	<p id="Catering">
	<h2 align="center">Catering Services</h2>
	
	<p> 
While the catering manager takes care of the food, service staff and facilities, 
the event planner needs to keep in touch while researching and implementing a plethora 
of related details.Transportation and on-site parking, the meeting agenda, audio-visual 
equipment needs,special menu requests, and last-minute changes all need to be ironed out
before the event.The goal must be to avoid last-minute surprises on either side. 
Menu substitutions,unexpected guests or drop-outs, and countless other snags can be 
taken care of before the big event.
	</p>
	
	
<img class="img1" src="images/works/cater3.jpg" />
<img class="img2" src="images/works/cater2.jpg" />
<img class="img3" src="images/works/cater4.jpg" />

	

	<p id="Photography">
        	<br />
	<h2 align="center">Photography Services</h2>
	
	<p>
	Our photographer was amazing, captured so many great moments, and was so accommodating 
to all our needs. Our videographer was also fantastic even with having to change up
 our first timeline in short notice. Lastly our DJ was absolutely on point! Anything 
 we forgot, he got in for us. We were in a time crunch and he made it happen how we needed it to!
 Our experience with Complete was fantastic."
 During our wedding, the photographers, videographer,
 and DJ all were working seamlessly together, making
 sure we had an amazing time. Their attention to detail and ability 
 to change things as needed as quickly as they could helped tremendously.
 I would highly recommend anyone who is planning an event/wedding to use Complete."
	</p>
	
<img class="img1" src="images/works/photo1.jpg" />
<img class="img2" src="images/works/photo4.jpg" />
<img class="img3" src="images/works/photo3.jpg" />

	

	<p id="Entertainment">
        	<br />
	<h2 align="center">Entertainment Services</h2>
	
	<p>
  We are a full service party DJ and event production company
 providing entertainment.
 We are also available to travel on a nationwide and worldwide basis. 
 If you are planning a party, video dance party, bar mitzvah, bat mitzvah, 
 corporate function, prom, school dance, sweet 16 party, quinceanera, 
 wedding reception, or any other type of function be sure and browse 
 this web site for all the information you will need to book your entertainment. 
 In addition to our DJ service, we can also provide Intelligent Light Shows, 
 Up-Lighting (Theme/Decor Lighting), Laser Light Shows, Large Screen Video,
 Lounge Furniture, Lightscaping, Video Games, Sound Reinforcement and Celebrities for hire.


For those clients who wish to be more involved, our Staff is available day and night to meet with you, at your convenience.

Our experienced Staff will provide the personal service needed to help you and/or your Staff make your special party the absolute best it can be.

Review the information on this site, as well as our Photos and Video and then contact us for a personal quote or to book our service.
	</p>
 
 
<img class="img1" src="images/works/entertain2.jpg" />
<img class="img2" src="images/works/entertain4.jpg" />
<img class="img3" src="images/works/entertain1.jpg" />


<p id="Parking">
    <br />
<h2 align="center">Parking Services</h2>

	
	
  We should let the experts determine the number of valets needed 
based upon the location of the parking, expected number of wedding guests, and event 
times. The number of valets needed will depend upon whether parking is on-premises 
or off-premises. As Wedding Event Planners know as most guests arrive and depart 
at the same time. To ensure guests are greeted promptly, extra valets will need 
to be scheduled. The rule of thumb is to divide the number of guests by two as 
most guests arrive in pairs and to then schedule one valet per fifteen to twenty 
cars. Charges for valet parking typically run $30-$35 per hour per valet. Many valet 
companies have a 4-5 hour minimum charge per valet. Most valet parking companies will 
want to see the venue before quoting a price.

	</p>
	

<img class="img1" src="images/works/park2.jpg" />
<img class="img2" src="images/works/park4.jpg" />
<img class="img3" src="images/works/park3.jpg" />

<br> <br>
<center>
    <a href="#top" align="right">take me to the top of the page</a>
</center>
<br> <br>	
	
	</body>
</html>


