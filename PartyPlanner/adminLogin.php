<html>
	<head>
		<meta charset="utf-8">
		<title> Admin Login - PartyPlanner.com</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
			<h2>Login</h2>
		</div>
		<form method="post" action="">
		
			<?php //echo display_error(); ?>
			
			<div class="input-group">
				<label> Admin Username </label>
				<input type="text" name="adminName">
			</div>
			<div class="input-group">
				<label> Admin Password </label>
				<input type="password" name="adminpw">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="submit"> Login </button>
				<button type="reset" class="btn" name="cancel_btn"> Cancel </button>
			</div>
            <p> Go back to <a href="login.php"> User Login </a> </p>
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
        $adminName = mysqli_real_escape_string($connection, $_POST['adminName']);
        $adminpw = mysqli_real_escape_string($connection, $_POST['adminpw']);
        
        $s = "SELECT * FROM admins WHERE adminName ='$adminName' and adminpw='$adminpw';";
        
        $result = mysqli_query($connection, $s);

        $num = mysqli_num_rows($result);
        if(mysqli_num_rows($result)==1){
            header("Location: pricing.html");
        }
        else {
        echo '<script language="javascript">';
        echo 'alert("Your Admin Login username or Password is invalid")';
		echo '</script>';  
        }
    } 
?>
