<?php
include 'config.php';
$name=$_GET['name'];
$mob_no=$_GET['mob_no'];
$alt_no=$_GET['alt_mob'];
$add=$_GET['address'];
$amt=$_GET['pamount'];
$sql="INSERT INTO `borrower` VALUES ('$name','$mob_no','$alt_no','$add','$amt') ";
$result=mysqli_query($con,$sql);
if(!$result){
    echo $con->error;
}
else{
    echo "Updated successfully";
}
$con->close();

?>