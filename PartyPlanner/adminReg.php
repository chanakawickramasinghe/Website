<?php require_once('connect.php'); ?>
<?php include('session.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign up - PartyPlanner.com </title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="header">
			<h2> Register </h2>
		</div>
		<form action='' method="POST">
			<div class="input-group">
				<label>Full Name</label>
				<input type="text" name="name" placeholder="Your name">
			</div>
			<div class="input-group">
				<label>Admin Username</label>
				<input type="text" name="adminName" placeholder="Your Username">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" placeholder="Your Email">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="adminpw" placeholder="Your Password">
			</div>
			<div class="input-group">
				<label>Address</label>
				<input type="text" name="address" placeholder="Your Address">
			</div>
            <div class="input-group">
                <label> Telephone Number </label>
                <input type="text" name="tp" placeholder="Your Number">
            </div>
			<div class="input-group">
				<button type="submit" class="btn" name="submit">Register</button>
				<button type="reset" class="btn" name="cancel_btn"> Cancel </button>
			</div>
		</form>
	</body>
</html>

<?php

if(isset($_POST['submit'])) {
    $name = $_POST["name"];
    $adminName = $_POST["adminName"];
    $email = $_POST["email"];
    $adminpw = $_POST["adminpw"];
    $address = $_POST["address"];
    $tp = $_POST["tp"];   

    $s = "SELECT * FROM admins WHERE adminName='adminName';";

    $result = mysqli_query($connection, $s);

    $num = mysqli_num_rows($result);
    
    $reg="INSERT INTO admins(name, adminName, email, adminpw, address, tp) VALUES ('".$_POST['name']."','".$_POST['adminName']."','".$_POST['email']."','".$_POST['adminpw']."','".$_POST['address']."','".$_POST['tp']."');";
    
        if(mysqli_query($connection , $reg) === TRUE) {
            $message = base64_encode(urlencode("Successfully Registered"));
            header('Location:adminLogin.php?msg=' . $message);
            exit(); 
        }
        else{
            $message = base64_encode(urlencode("SQL Error while Registering"));
            header('Location:adminReg.php?msg=' . $message);
            exit();
        }
}

mysqli_close($connection);
?>