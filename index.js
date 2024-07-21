function details(){
  
var name=document.getElementById("cuname").value;

var mno=document.getElementById("cmno").value;
if(name==="")
    {
        document.getElementById("cp").innerText="Enter your name";
    }
    else {
        document.getElementById("cp").style.display="none";
        
    }
    if(mno==="")
        {
            document.getElementById("cm").innerText="Enter  mobile number";
        }
        else if(isNaN(mno)){
            document.getElementById("cm").innerText="Enter  mobile number";
        }
        else {
            document.getElementById("cm").style.display="none";
            
        }
        obj=new XMLHttpRequest();
        //obj.open("GET","check.php",true);
        obj.open("GET","check.php?name="+name+"&mno="+mno,true);
        
        obj.onreadystatechange=function(){
            
           if(obj.readyState===4 && obj.status===200){
            document.getElementById("det_cus").innerHTML=obj.responseText;
              // alert("Total Amount "+obj.responseXML);

           }
        }
        obj.send(); 
      /*  obj=new XMLHttpRequest();
        obj.open("GET","check.php?name="+name+"&mno="+mno,true);
        
        obj.onreadystatechange=function(){
            alert("name"+nmae);
if(obj.readyState==4 && obj.status===200){
    alert(obj.responseText);
   // document.getElementById("det_cus").innerText=obj.responseText;
}
        }
        obj.send();*/
        }
        function cal_total(){
           xml=new XMLHttpRequest();
         xml.open("GET","amount.php",true);
         xml.onreadystatechange=function(){
            if(xml.readyState==4 && xml.status===200){
                alert("Total Amount "+xml.responseText);

            }
         }
         xml.send();  
        }

function newborrower(){
     
var name=document.getElementById("uname").value;

var mno=document.getElementById("mno").value; 
var address=document.getElementById("addr").value;
var altno=document.getElementById("amno").value;
var pam=document.getElementById("pam").value;

if(name==="")
    {
        document.getElementById("bn").innerText="Enter  name";
    }
    else {
        document.getElementById("bn").style.display="none";
        
    }
    if(mno==="")
        {
            document.getElementById("bm").innerText="Enter  mobile number";
        }
        else if(isNaN(mno)){
            document.getElementById("bm").innerText="Enter  mobile number";
        }
        else {
            document.getElementById("bm").style.display="none";
            
        }
        
    if(address==="")
        {
            document.getElementById("ba").innerText="Enter  address";
        }
        else {
            document.getElementById("ba").style.display="none";
            
        }
        
    if(pam==="")
        {
            document.getElementById("bam").innerText="Enter Pending amount";
        }
        else {
            document.getElementById("bam").style.display="none";
            
        }
        xml=new XMLHttpRequest();
        xml.open("GET","input.php?name="+name+"&mob_no="+mno+"&alt_mob="+altno+"&address="+address+"&pamount="+pam,true);
        xml.setRequestHeader("Content-Type","applications/x-www-form-urlencoded");
        xml.onreadystatechange=function(){
            if(xml.readyState===4 && xml.status===200){
         //   document.getElementById("update").innerText=xml.responseText;
          alert("updated successfully");  }}
            xml.send();


}
function search(){
      
var from=document.getElementById("fromd").value;

var to=document.getElementById("todate").value;    
if(from===""){
    document.getElementById("st").innerText="Enter proper date";
}
if(to==="")
    {
        document.getElementById("st").innerText="Enter  proper";
    }
}
