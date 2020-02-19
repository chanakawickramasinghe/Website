<?php require_once('../connect.php'); ?>
<?php
session_start();
if (! empty($_SESSION['logged_in']))
{
}
else
{
    
//    echo "<script>alert('Please login to continue');</script>";
    header("Location: ../not_logged.php");
//
}
?>
    <html>
    <head>
        <meta charset="utf-8">
		<title> Admin Home - PartyPlanner.com </title>
        <link rel="stylesheet" href="../css/view.css">
        <link rel="stylesheet" href="../css/nav.css">
    </head>

    <body>
        <nav>
                <label class="logo">Party Planner</label>
                <ul>
                    <li><a href="adminHome.php">Admin Home</a></li>
					<li><a href=event_view.php>New Events</a></li>
					<li><a href="message_view.php">Messages</a></li>
					<li><a href="users.php">Users</a></li>
                    <li> <a href="../logout.php"> Logout</a></li>
                   
                </ul>
        </nav>
        <marquee direction="left"><font color="#DD0000", size="16px", type="helvetica"> Welcome Admin!</font></marquee>


            <p><font size="5px">New work is an amazing chance to show the world what you are capable of.</font></p>
            <br>
        <p><font size="10px" align="center">Lets start!!! </font></p>

            <img src="../images/homepage/home3.jpg" align="left" height=520 width="70%">
            <img src="../images/homepage/home2.jpg" align="right" height=260 width="29%"> 
            <img src="../images/homepage/home4.jpg" align="right" width="29%" height=260>
</body
