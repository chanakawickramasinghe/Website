<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign up - PartyPlanner.com </title>
		<link rel="stylesheet" href="../css/style.css">
        <script  src="../javascript/register.js"></script>
	</head>
	<body>
		<div class="header">
			<h2> Register </h2>
		</div>
		<form action='' method="POST" name="form" onSubmit="return checkForm()">
			<div class="input-group">
				<label>Admin Name</label>
				<input type="text" name="name" placeholder="Enter Admin name">
			</div>
			<div class="input-group">
				<label>Admin Username</label>
				<input type="text" name="username" placeholder="Enter Admin Username">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" placeholder="Admin Email">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Admin Password">
			</div>
			<div class="input-group">
				<label>Address</label>
				<input type="text" name="address" placeholder="Admin Address">
			</div>
            <div class="input-group">
                <label> Telephone Number </label>
                <input type="text" name="tp" placeholder="Admin Contact Number">
            </div>
			<div class="input-group">
				<button type="submit" class="btn" name="submit">Register Admin</button>
				<button type="reset" class="btn" name="cancel_btn"> Reset </button>
			</div>
            <p> <a href="users.php">Go Back to users</a></p>
		</form>
	</body>
</html>

<?php

if(isset($_POST['submit'])) {
//    $name = $_POST["name"];
    $username = $_POST["username"];
//    $email = $_POST["email"];
//    $password = $_POST["password"];
//    $address = $_POST["address"];
//    $tp = $_POST["tp"];   

    $s = "SELECT * FROM registration WHERE username='$username';";

    $result = mysqli_query($connection, $s);

    $num = mysqli_num_rows($result);
    
    if($num >= 1){
         echo "<script>alert('Username is taken, please enter another username');</script>";
    }
    else{
    
    $reg="INSERT INTO registration(name, username, email, password, address, tp, user_type) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['address']."','".$_POST['tp']."','1');";
    
        if(mysqli_query($connection , $reg) === TRUE) {
            echo "<script>alert('Successfully Registered');</script>";
            header('Location:users.php');
            exit(); 
        }
        else{
            header('Location:users.php');
            exit();
        }
    }
}


mysqli_close($connection);
?>