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

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM registration";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

?>
    
    <head>
        <meta charset="utf-8">
        <title> Users - PartyPlanner.com </title>
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
        <div class="header">
            <h2>Registered Users</h2>
        </div>
        <form>
        <div class="tab">
        <center>
        <table border=1 align ="center" bgcolor="white">
            <tr bgcolor="yellow">
                <td>Username</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Address</td>
                <td>Contact Number</td>
                <td>User Type</td>
                <td>Update</td>
                <td>delete</td>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                 <td><?php echo $row['username'] ?></td>
			     <td><?php echo $row['name'] ?></td>
			     <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['tp'] ?></td>
                <td><?php echo $row['user_type'] ?></td>
                <?php echo "<td><a href =update_users.php?username='".$row['username']."' > update </a> </td>"?>
			<?php echo "<td><a href =delete_user.php?username='".$row['username']."' > delete </a> </td>"?>
            </tr>
            <?php
            }
            ?>
        </table>
        </center>
        </div>
            <p> <a href="adminReg.php">Add an Admin</a> </p>
        </form>
    </body>
</html>