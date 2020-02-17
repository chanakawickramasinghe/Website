<?php require_once('../connect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
	   <meta charset="utf-8">
       <title> Creator Details - PartyPlanner.com </title>
       <link rel="stylesheet" href="../css/view.css">
       <link rel="stylesheet" href="../css/nav.css">
    </head>
    <body>
        <div class="header">
            <h2>Creator Details</h2>
        </div>
        <form>
        <div class="tab">
        <center>
	   <table border="1">
		  <tr bgcolor="yellow">
            <td>Username</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Address</td>
            <td>Contact Number</td>
		  </tr>
           <tr>
               <?php
                    if(isset($_GET['username'])){
                    $sql1 = "SELECT * FROM registration WHERE username =".$_GET['username'];
                    $result = mysqli_query($connection,$sql1);
                    $row=mysqli_fetch_assoc($result);
                ?>
               <td> <?php echo $row['username']; ?></td>
               <td> <?php echo $row['name']; ?></td>
               <td> <?php echo $row['email']; ?></td>
               <td> <?php echo $row['password']; ?></td>
               <td> <?php echo $row['address']; ?></td>
               <td> <?php echo $row['tp']; ?></td>
               <?php
                    }
               ?>
           </tr>
	</table>
    </center>
        <br />
        <a href="event_view.php"> Go Back </a>
    </div>
    </form>
</body>
</html>