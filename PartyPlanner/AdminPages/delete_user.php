<?php require_once('../connect.php'); ?>

<?php
if(isset($_GET['username'])){
$sql = "DELETE FROM registration WHERE username = ".$_GET['username'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location:users.php");
}
?>