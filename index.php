<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">


</head>
<body>
    <div class="navigation">
<ul class="nav">
    <li>
      <a href="display.php">  Display All Details</a>
    </li>
    <li>
        <a onclick="cal_total()"> Total Amount</a>
    </li>
    <li>
        <a href="add.html">Add Amount</a>
    </li>
    <li>
        <a href="pay.html">Paid Amount</a>
    </li>
    <!--
    <ul class="sep">
      
            <li>
            <label>
                From : 
            </label>
            <input type="date" id="fromd">
            </li>
    <li>
            <label>
                To : 
            </label>
            <input type="date" id="todate">

    </li>
    <li>
      <button onclick="search()" style="background-color: #FFCBCB ;font-weight:bold ;font-size:16px ;" type="button">Search</button>  
    </li>
</ul>
-->
    <p id="st"></p>
</ul>
    </div>
       <div class="container">
    <div class="newborr">
<h1>New Borrower</h1>
<h1 id="update"></h1>
<form>
<table>
<tr>
    <td><label>Name</label></td>
    <td><input type="text" id="uname">
        <br>
        <p id="bn"></p></td>
</tr>
<tr>
    <td><label>Mobile Number</label></td>
    <td><input type="tel" id="mno">
        <br>
        <p id="bm"></p></td>
</tr>
<tr>
    <td><label>Alternate Mobile number</label></td>
    <td><input type="tel" id="amno"></td>
</tr>
<tr>
    <td><label>Address</label></td>
    <td><textarea id="addr"></textarea>
        <br>
        <p id="ba"></p></td>
</tr>
<tr>
    <td><label>Pending Amount</label></td>
    <td><input type="number" id="pam">
        <br>
        <p id="bam"></p></td>
</tr>

</table>
<center>
    <button onclick="newborrower()"  style="background-color: #FFEAE3 ;font-weight:bold ;font-size:16px ;" type="button"> Create New One</button>
</center>    

</form>
    </div>
  
    <div class="searchdet">
        <div class="check">
<h1>Check Details</h1>
<form>
    <table>
    <tr>
        <td><label>Name</label></td>
        <td><input type="text" id="cuname">
        <br>
    <p id="cp"></p></td>
    </tr>
    <tr>
        <td><label>Mobile Number</label></td>
        <td><input type="tel" id="cmno"><br>
            <p id="cm"></p></td></td>
    </tr>
</table>
<center>
<button onclick="details()" style="background-color: #FFCBCB ; font-weight:bold ;font-size:16px ;" type="button">Check</button>



</center>

<div id="det_cus"></div>
</form>

</div>
    </div>

</div>
    
<script src="index.js?v=<?php echo time();?>">

</script>
</body>
</html>