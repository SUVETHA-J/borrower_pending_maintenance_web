<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        body{
            background-color:#FFCBCB;}
        .disp{
            background-color: #FFEAE3 ;
            margin: auto;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding:30px;
font-size: 20px;
height: 500px;
width: 50%;
overflow: auto;
}


h1{
    background-color:#FFEAE3;
    width:50%;
 margin-top: 50px;

}
.home{
    padding-left: 20xp;
}
button{
    padding: 10px;
    color:black;
    background-color:#FFEAE3;
border:0px;
position: absolute;
left:23%;
border-radius: 20px;
line-height: 20px;
margin: 10px;
}
.home:hover {
    background-color: brown;
    a{color:#FFEAE3;}
}
a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

        td{padding: 30px;
        cursor: pointer;}
        table{
            margin-left: 20px;}
            tr:hover{
                background-color: #FFCBCB;
                color:brown;
            }
            th{
                padding: 20px;
            }
    </style>
</head>
<body>
<center><h1 >Details Of Borrower</h1></center>
<div> <button class="home"><a href="index.php">Back to home page</a></button>
        </div>    
<div class="disp">
 
        <div class="tab"> <center> <table border="1" cellspacing="0"><thead>
            <th>
            Name
            </th>
            <th>
            Mobile Number
            </th>            <th>
            Alternate Mobile Number
            </th>      
            <th>
            Address
            </th>
            <th>
            Pending Amount
            </th>
            </thead> 
        <?php
        include 'config.php';
        $sql="SELECT * FROM `borrower`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>".$row["name"]."</td>
    <td>".$row["mob_no"]."</td>
    <td>".$row["alt_mobno"]."</td>
    <td>".$row["address"]."</td>
    <td> 
    Rs".$row["pend_amt"]."</td>
    </tr>
    ";
}?>
</table>
</div>
  
</center>   
    </div>
   
</body>
</html>