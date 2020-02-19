<?php require_once('../connect.php'); ?>

<?php
if(isset($_GET['id'])){
$sql = "DELETE FROM messages WHERE id = ".$_GET['id'];

$result = mysqli_query($connection,$sql);

if($result){
//    echo "Sucessfull";
//    echo "<script> confirm('are you sure want to delete'); </script>";
}
else{
}
    
header("Location:message_view.php");
}
?>