<?php
include 'config.php';
$sql="SELECT SUM(`pend_amt`) TOTAL FROM `borrower`";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
echo $row["TOTAL"];
?>