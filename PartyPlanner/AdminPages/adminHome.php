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
		<title> ContactUS - PartyPlanner.com </title>
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
</body
