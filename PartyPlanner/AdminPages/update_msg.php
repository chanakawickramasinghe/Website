<?php require_once('../connect.php'); ?>
<?php
if(isset($_GET['id'])){
$sql1 = "SELECT * FROM user WHERE id =".$_GET['id'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo"failed";	
}

}