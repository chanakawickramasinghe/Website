<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM events";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}
?> 
 
    <head>
        <meta charset="utf-8">
        <title> View Events - PartyPlanner.com </title>
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
                    <li> <a href="../login.php"> Logout</a></li>
                   
                </ul>
        </nav>
        <div class="header">
            <h2>Events by Users</h2>
        </div>
        <form>
        These are the events created by the users <br /> <br />
        <div class="tab">
        <table border=1 align ="center" bgcolor="white">
            <tr bgcolor="yellow">
                <td>Event Name</td>
                <td>Event Type</td>
                <td>Selected Package</td>             
                <td>Venue Selected</td>
                <td>Date of Event</td>
                <td>Start time</td>
                <td>End Time</td>
                <td>No. of participants</td>  
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['event_name'] ?></td>
			     <td><?php echo $row['event_name'] ?></td>
			     <td><?php echo $row['package'] ?></td>
                <td><?php echo $row['venue'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['start_time'] ?></td>
                <td><?php echo $row['end_time'] ?></td>
                <td><?php echo $row['num'] ?></td>
                

<!--
                <?php echo "<td><a href ='update_product.php?pid=".$row['Product_ID']."' > update </a> </td>"?>
			     <?php echo "<td><a href ='delete_product.php?pid=".$row['Product_ID']."' > delete </a> </td>"?>
-->

            </tr>
            <?php
            }
            ?>                         
        </table>
        </div>
        </form>
    </body>
</html>