<?php
include 'config.php';
$name=$_GET['name'];
$mno=$_GET['mno'];
$bamt=$_GET['bamt'];
$sql="SELECT * FROM `borrower` WHERE name='$name' AND mob_no='$mno'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
if(!$row){
    echo "Search Not Availbale";
}else{
$amt=$row['pend_amt']+$bamt;

$sql="UPDATE `borrower` SET pend_amt='$amt' WHERE name='$name' AND mob_no='$mno'";
$result=mysqli_query($con,$sql);

$sql="SELECT * FROM `borrower` WHERE name='$name' AND mob_no='$mno'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
if($row){
    echo "<ul>
    <li>
    Name : ".$row['name']."
    </li>
    <li>
    Mobile no : ".$row['mob_no']."
    </li>
    <li>
    Alt Mobile No : ".$row['alt_mobno']."
    </li>
    <li>
    Address : ".$row['address']."
    </li>
    <li>
    Pending Amount : ".$row['pend_amt']."
    </li>
    
    </ul>";
    }
    else{echo "
        Search Not available";}
    
    }
?>

