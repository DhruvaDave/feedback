<?php
 include_once('control.php');
 
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="../26/ts_picker.js">

//Script by Denis Gritcyuk: tspicker@yahoo.com
//Submitted to JavaScript Kit (http://javascriptkit.com)
//Visit http://javascriptkit.com for this script
<script type="text/javascript"src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#b1").mouseover(function() {
	
	$("#form1").fadeIn("2000");
	});

});
</script>
</script>

<style type="text/css">

#c
	{
	font-size:36px;
	color:#0000FF;
	font-family:forte;
	margin:3%;
	}
	#f
	{
	   font-family:Calibri;
	   color:#CC3366;
	   font-size:24px;
	   font-style:italic;
	   font-weight:bolder;
	}
	#f1
	{
	   font-family:Calibri;
	   color:#9933FF;
	   font-size:22px;
	   font-style:italic;
	   
	}
	

</style>

</head>
<body>
 <br /> 

<center>

<form method="post">
<table border="2">
<tr>
<caption id="c"> Feedback </caption>


<table border="3" align="center" >
	  
	    <tr border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">
		  <td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px"> Name </td>
			 <td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px"> Subject </td>
			 <td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px"> Points </td>
			 <td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px"> Negative Points </td>
			   </tr>
			   
					 
<?php
		
		
	    foreach($fe2 as $c1)
		{
		
	  ?>
	  
			  
        <tr border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">
		<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">
			<?php echo $c1['fname']; ?> </td>
			<input type="hidden" name="fname[]" value="<?php echo $c1['fname']; ?>" />
			<input type="hidden" name="sname[]" value="<?php echo $c1['sname']; ?>" />
			<input type="hidden" name="divison[]" value="<?php echo $c1['divison']; ?>" />
			<input type="hidden" name="semester[]" value="<?php echo $c1['semester']; ?>" />
			
			
		<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px" >
		<?php echo $c1['sname']; ?> </td>
		<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">	
			
		<select name="point[]" >
			   <option> Points </option>
			   <option value="1"> 1 </option> <option value="2"> 2 </option>
			   <option value="3"> 3 </option> <option value="4"> 4 </option>
			   <option value="5"> 5 </option> <option value="6"> 6 </option>
			   <option value="7"> 7 </option> <option value="8"> 8 </option>
			   <option value="9"> 9 </option> <option value="10"> 10 </option>
			   </select> 
		</td>	 
		<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">		
		<select>
			   <option> Negative Points </option>
			   <option> 1 </option> <option> 2 </option>
			   <option> 3 </option> <option> 4 </option>
			   <option> 5 </option> <option> 6 </option>
			   <option> 7 </option> <option> 8 </option>
			   <option> 9 </option> <option> 10 </option>
			   </select> 
		</td>	 
		
		
		<?php
		}
		?>
		
     
		
		</tr>
		<tr>
		<td> <input type="submit" name="feedback" value="FeedBack"/> </td>
		</tr>
		</table>	



</form>
<br /> <br />
</center>
<?php
 include('footer.php');
?>
</body>
</html>
