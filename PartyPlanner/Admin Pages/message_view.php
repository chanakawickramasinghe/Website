<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM messages";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}
?>

    <head>
        <meta charset="utf-8">
        <title> View Messages - PartyPlanner.com </title>
        <link rel="stylesheet" href="../css/view.css">
    </head>
    <body>
        <div class="header">
            <h2>Messages by Users</h2>
        </div>
        <form>
        <div class="tab">
        <table border=1 align ="center" bgcolor="white">
            <tr bgcolor="yellow">
                <td>Name of the Sender</td>
                <td>Email of the sender</td>
                <td>Message sent by the sender</td>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['yname'] ?></td>
			     <td><?php echo $row['email'] ?></td>
			     <td><?php echo $row['message'] ?></td>
                
<!--
                <?php echo "<td><a href ='update_product.php?pid=".$row['Product_ID']."' > update </a> </td>"?>
			     <?php echo "<td><a href ='delete_product.php?pid=".$row['Product_ID']."' > delete </a> </td>"?>
-->
            </tr>
            <?php
            }
            ?>                         
        </table>
        </div>
        </form>
    </body>
</html>