<?php require_once("connect.php"); ?>
<?php 
  session_start();

  if (isset($_POST['submit'])) {
    if($_POST['username']=="ucsc"){
      $sql = "SELECT * FROM registration WHERE username = '{$_POST['username']}' AND password = '" . md5($_POST['password']) . "';";
      $result = $connection->query($sql);
      if ($result->num_rows == 1) {
        $_SESSION['logged_in'] = true;
        header("Location: AdminPages/adminHome.php");
      }
      else {
        echo "<script>alert('Password Not Valid');</script>";
      }
    }
    else{
      $sql = "SELECT * FROM registration WHERE username = '{$_POST['username']}' AND password = '" . md5($_POST['password']) . "';";
      $result = $connection->query($sql);
      if ($result->num_rows == 1) {
        $_SESSION['logged_in'] = true;
        while($userRow = mysqli_fetch_assoc($result)){
            $_SESSION["username"] = $userRow['username'];
        }
        
        header("Location: home.php");
      }
      else {
        echo "<script>alert('Username and Password does not match');</script>";
      }
    }
    
  }
 ?>


<html>
	<head>
		<meta charset="utf-8">
		<title> Login Page - PartyPlanner.com</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <script  src="javascript/login.js"></script>

	</head>
	<body>
		<div class="header">
			<h2>Login</h2>
		</div>
		<form action='' method="POST" name="form" onSubmit="return checkForm()">
			<?php //echo display_error(); ?>
			
			<div class="input-group">
				<label> Username </label>
				<input type="text" name="username" placeholder="Enter Your Username">
			</div>
			<div class="input-group">
				<label> Password </label>
				<input type="password" name="password" placeholder="Enter Your Password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="submit"> Login </button>
				<button type="reset" class="btn" name="cancel_btn"> Cancel </button>
			</div>
			<p> Don't have an account? Create one <a href="register.php">Sign up</a></p>
            <!--<p> <a href="adminLogin.php"> Click Here for Admin Login </a> </p>-->
		</form>
	</body>
</html>

