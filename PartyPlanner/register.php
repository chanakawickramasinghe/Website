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
				<label>Username</label>
				<input type="text" name="username" placeholder="Your Username">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" placeholder="Your Email">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Your Password">
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
			<p> Already registered? <a href="login.php"> Login </a> </p>
		</form>
	</body>
</html>

<?php

if(isset($_POST['submit'])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $tp = $_POST["tp"];   

    $s = "SELECT * FROM registration WHERE username='$username';";

    $result = mysqli_query($connection, $s);

    $num = mysqli_num_rows($result);
    
    $reg="INSERT INTO registration(name, username, email, password, address, tp) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','".$_POST['address']."','".$_POST['tp']."');";
    
        if(mysqli_query($connection , $reg) === TRUE) {
            $message = base64_encode(urlencode("Successfully Registered"));
            header('Location:login.php?msg=' . $message);
            exit(); 
        }
        else{
            $message = base64_encode(urlencode("SQL Error while Registering"));
            header('Location:login.php?msg=' . $message);
            exit();
        }
    /*if($num>1) {
        echo "Username is Already taken, please enter another username";
        }
    else if($num==0) {
        echo "ajjaja";
        $reg="INSERT INTO registration(name, username, email, password, address, tp) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','".$_POST['address']."','".$_POST['tp']."');";
        echo reg;
        if(mysqli_query($connection , $reg) === TRUE) {
            $message = base64_encode(urlencode("Successfully Registered"));
            header('Location:login.php?msg=' . $message);
            exit(); 
        }
    }
    else if($num==1) {
         $reg="INSERT INTO registration(name, username, email, password, address, tp) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','".$_POST['address']."','".$_POST['tp']."');";
        
        if(mysqli_query($connection , $reg) === TRUE) {
            $message = base64_encode(urlencode("Successfully Registered"));
            header('Location:login.php?msg=' . $message);
            exit(); 
        }
        else {
            $message = base64_encode(urlencode("SQL Error while Registering"));
            header('Location:login.php?msg=' . $message);
            exit();
        }
    }*/
}

mysqli_close($connection);
?>