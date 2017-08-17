<?php
  include_once('control.php');
  error_reporting(0);
 
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script type="text/javascript"src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#b1").mouseover(function() {
	
	$("#form1").fadeIn("2000");
	});

});
   function showstate(str) 
  { 
    var xmlHttp; 
    if(window.XMLHttpRequest) 
    { 
      xmlHttp = new  XMLHttpRequest(); 
    } 
    else 
    { 
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    xmlHttp.onreadystatechange = function() 
    { 
      if(xmlHttp.readyState == 4 ) 
      { 
        document.getElementById('state').innerHTML = xmlHttp.responseText;
      } 
    } 
    xmlHttp.open('GET','getdata.php?cid='+str,true); 
    xmlHttp.send(); 
	}
	
	
 function showcity(str) 
  { 
    var xmlHttp; 
    if(window.XMLHttpRequest) 
    { 
      xmlHttp = new  XMLHttpRequest(); 
    } 
    else 
    { 
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    xmlHttp.onreadystatechange = function() 
    { 
      if(xmlHttp.readyState == 4 ) 
      { 
        document.getElementById('city').innerHTML = xmlHttp.responseText;
      } 
    } 
    xmlHttp.open('GET','getdata.php?sid='+str,true); 
    xmlHttp.send(); 
	}
</script>


<style type="text/css">

#f
{ 
  height:650px;   
}
#form1 {
display:none;
}

#t
{
  color:#000099;
  font-size:18px;
  font-weight:bolder;
 border-radius:10%;
  border:#000000;
  opacity: 0.9;
  }
#s
{
  background-color:#CC0033;
  color:#FFFFFF;
  font-size:18px;
  height:40px;
  width:100px;
  
}
#r
{
color:#CC0033; 
font-family:Forte;
}
#b1{
width:100%;
height:100%;
position:fixed;
left:0px;
top:0px;
z-index:-1;
}

.stretch {
width:100%;
height:100%;
}


</style>


</head>

<body  bgcolor="#666666" >
<div id="b1">
<img src="../../car/Bugatti-Cars-Ultimate-Themes-HD-Awesome-Wallpapers-Backgrounds.jpg" class="stretch" />
</div>
<center>
<form id="form1" method="post" name="frm" action="p6.php" >
<div id="f">
<table cellspacing="10" >
<tr>
<td colspan="2" align="center" id="r">
 <center><h1><b>Feedback</b></h1> </center> </td>

<tr>
<td>Select Semester<br> </td><br>
<!--<td> <input type="text" name="sem" style="width:100%" /> </td>
<td> <input type="text" name="div" style="width:100%" /> </td>
--><td>  <select data-placeholder="Select Your Category" name="sem" style="width:100%" >

      <option> Select Semester </option>
	  <option> 1 </option>
	  <option> 2 </option>
	  <option> 3 </option>
	  <option> 4 </option>
	  <option> 5 </option>
	  <option> 6 </option>
	  <option> 7 </option>
	  <option> 8 </option>
</select> </td>
</tr>

<tr>
<td>Select Divison<br> </td><br>
<td>  <select data-placeholder="Select Divison" name="div" style="width:100%" >

      <option> Select Divison </option>
	  <option> A </option>
	  <option> B </option>
	  <option> C </option>
	  <option> D </option>
	  <option> E </option>
	  <option> F </option>
</select> </td>
</tr>


<tr border="3" style="border:solid 3px #000000" id="f" align="center" width="100px" height="20px">
<td colspan="2" align="center"  > <input type="submit" name="feed" value="Feedback" />
<?php 

/* if(isset($_REQUEST['feed']))
{
	header('location:p6.php');
} */
?>
                   </td>
</tr>


</tr>
</table>
</div>
</form>




</body>
</html>
