<?php
$name=$_GET['name'];
$mno=$_GET['mno'];
include 'config.php';
$sql="SELECT * FROM `borrower` WHERE name='$name' AND mob_no='$mno'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
//echo " $name and $mno";
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
?>
