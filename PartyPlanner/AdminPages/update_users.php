<?php require_once('../connect.php'); ?>

<?php
if(isset($_GET['username'])){
$sql1 = "SELECT * FROM registration WHERE username =".$_GET['username'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
}

if (isset($_POST['updateB'])){
	$sql2 = "UPDATE registration SET name = '".$_POST['name']."',email = '".$_POST['email']."',password='".$_POST['password']."',address='".$_POST['address']."',tp='".$_POST['tp']."' WHERE username ='".$_POST['username']."'";
    $result2 = mysqli_query($connection,$sql2);

    echo"<script> alert('Updated Sucessfully') </script>"; 
    header("Location: users.php");

}
?>

<!DOCTYPE html>
<html>
    <head>
	   <link rel="stylesheet" href="css/style.css">
	   <title> Update Users - PartyPlanner.com</title>
    </head>
    <body>
	   <table>
		  <tr>
            <td>Username</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Address</td>
            <td>Contact Number</td>
		  </tr>
		  <form action='' method ='POST' name="form">
			<tr>
			<?php echo "<td><input type = 'text' name='username' required value =".$row['username']." readonly></td>";
			echo "<td><input type = 'text' name='name' required value =".$row['name']."></td>";
			echo "<td><input type = 'email' name='email' required value =".$row['email']."></td>";
            echo "<td><input type = 'password' name='password' required value =".$row['password']."></td>";
            echo "<td><input type = 'text' name='address' required value =".$row['address']."></td>";
            echo "<td><input type = 'text' name='tp' required value =".$row['tp']."></td>";
			?>
		</tr>
		<tr>
            <div class="input-group">
                <td><button type='submit' name='updateB' class="btn"> Update </button></td>
            </div>
			<td colspan =3><a href="users.php"><button type="button">View Users</button></a></td>
		</tr>
		</form>
	</table>
</body>
</html>
