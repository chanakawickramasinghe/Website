<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM messages";
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
        <title> View Messages - PartyPlanner.com </title>
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
            <h2>Messages by Users</h2>
        </div>
        <form>
        <div class="tab">
        <table border=1 align ="center" bgcolor="white">
            <tr bgcolor="yellow">
                <td>Name of the Sender</td>
                <td>Subject</td>
                <td>Message sent by the sender</td>
                <td>Delete</td>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['yname'] ?></td>
			     <td><?php echo $row['subject'] ?></td>
			     <td><?php echo $row['message'] ?></td>
			     <?php echo "<td><a href ='delete_msg.php?yname=".$row['yname']." && subject=".$row['subject']."'> Delete </a> </td>"?>
            </tr>
            <?php
            }
            ?>                         
        </table>
        </div>
        </form>
    </body>
</html>