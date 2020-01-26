<html>
	<head>
		<meta charset="utf-8">
		<title> Login Page - PartyPlanner.com</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
			<h2>Login</h2>
		</div>
		<form method="post" action="login.php">
		
			<?php //echo display_error(); ?>
			
			<div class="input-group">
				<label> Username </label>
				<input type="text" name="username">
			</div>
			<div class="input-group">
				<label> Password </label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="submit"> Login </button>
				<button type="reset" class="btn" name="cancel_btn"> Cancel </button>
			</div>
			<p> Don't have an account? Create one <a href="register.php">Sign up</a></p>
		</form>
	</body>
</html>
		


<?php 
    require_once('connect.php');
    session_start();
    /*if(isset($_SESSION['username'])) {
        if($_SESSION['userType'] == 'admin') {
            header("Location: ../html/signup.php");
        } else {
            header();
        }
    }*/
    
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        
        $s = "SELECT * FROM registration WHERE username ='$username' and password='$password';";
        
        $result = mysqli_query($connection, $s);

        $num = mysqli_num_rows($result);
        if(mysqli_num_rows($result)==1){
            header("Location: register.php");
        }
        else {
        echo '<script language="javascript">';
        echo 'alert("Your Login ID or Password is invalid")';
		echo '</script>';  
        }
    } 
?>
