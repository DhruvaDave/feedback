<?php
  include_once('control.php');
  error_reporting(0);
 
  
?>

<!doctype html>
<html lang="en">
<head>
</head>


<body class="components-page">

<center>

<?php   include_once('all.html'); ?>

 <div class="main main-raised">
        <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="fixed-section" data-spy="affix" data-offset-top="340">
                    <ul>
						<li><a href="faculty_reg.php">Faculty Registration</a></li><br/>
						<li><a href="sreg.php">Student Registration</a></li><br/>
						<li><a href="sf.php">Subject Allocation</a></li><br/>
						<li><a href="temp.php">Search</a></li><br/>
						
                    </ul>
                </div>
            </div>
    
<div class="col-md-8 col-md-offset-1">
<div class="tim-row tim-row-first">



<form id="form1" method="post" name="frm" >
<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header" data-background-color="red">
								<h4 class="title">Subject Allocation</h4>
								
							</div>
				
<div class="card-content table-responsive">
<table class="table">

<div class="col-sm-4">
	<div class="form-group">
 

 <div class="dropdown">
 <tr>
 <td> Faculty </td>
 <td>  <select data-placeholder="Select Divison" name="faculty"  >
             
      <option> Select Faculty </option>
	  
	  <?php
	    foreach($sfre as $c)
		{
	  ?>
        
		<option value="<?php echo $c['fid']; ?>">
		<?php echo $c['fname']; ?> 
		</option> </ul>
		<?php
		}
		?>
		
</select>  </td>
 </tr>
 
 <tr>
<td> Semester </td> <td> <select data-placeholder="Select Semester" name="sem"  >

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
<td>  Divison </td>
<td>   <select data-placeholder="Select Divison" name="div"  >

      <option> Select Divison </option>
	  <option> A </option>
	  <option> B </option>
	  <option> C </option>
	  <option> D </option>
	  <option> E </option>
	  <option> F </option>
</select> </td>
</tr>


<tr>
 <td> Subject Name </td>
 <td>  <select data-placeholder="Subject Name" name="sub"  >

      <option> Subject Name </option>
	  <?php
	    foreach($sfre1 as $c1)
		{
	  ?>
        
		<option value="<?php echo $c1['sid']; ?>">
		<?php echo $c1['sname']; ?> 
		</option>
		<?php
		}
		?>
		
</select>  </td>
 </tr>
</div> 

<td colspan="2" align="center"> <button class="btn btn-info" type="submit" name="sf" value="Submit"  > Insert </button>
		  </td></center>
		  </tr>

		 
</table>
</div>
</form>

</div> </div> </div> </div>

</div> <!-- end container -->
		 </div> <!--  end col-md-8 -->
	 </div> <!-- end row -->
 </div> <!-- end first container-->
</div> <!-- end section -->



<?php include_once('footer.html'); ?>



</body>
</html>
