<?php require_once('../connect.php'); ?>

<?php
if(isset($_GET['event_id'])){
$sql = "DELETE FROM events WHERE event_id = ".$_GET['event_id'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location:event_view.php");
}
?>