<?php require_once('../connect.php'); ?>

<?php
if(isset($_GET['username'] && $_GET['subject'])){
$sql = "DELETE FROM registration WHERE username = '".$_GET['username']." AND subject= ".$_GET['subject']."';";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location:message_view.php");
}
?>