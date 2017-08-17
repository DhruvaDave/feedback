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
								<h4 class="title"> Student Registration</h4>
								
							</div>
				
<div class="card-content table-responsive">
<table class="table">

<div class="col-sm-4">
	<div class="form-group">
 
 <tr>
 <td> Enrollment No. </td>
 <td> <input type="text" name="enroll" placeholder="Enrollment No" class="form-control"/> </td>
 </tr>

<tr>
<td>Roll No.</td>
<td><input type="text" name="rno"  placeholder="Roll No." class="form-control"  /></td>
</tr>

 
 <tr>
<td  >First Name</td><br><td><input type="text" name="fname"   placeholder="First Name" class="form-control" /></td>

</tr>



<tr> 
<td>Phone No</td> <td><input class="form-control" type="text" name="no"  placeholder="Phone No." data-mask="(999) 999-9999"   ></td>
</tr>

<div class="radio">
	<label>

<tr>
<td> Password </td>
<td> <input class="form-control" type="text" name="pass" placeholder="Password"/> </td>
</tr>


 <tr>
<td> Semester </td><br><td><input type="text" name="semester"   placeholder="Semester" class="form-control" /></td>

</tr>

 <tr>
<td  > Divison </td><br><td><input type="text" name="divison"   placeholder="Divison" class="form-control" /></td>
</tr>

<div class="dropdown">
<tr>
<td> Department </td>
<td>  <select data-placeholder="Select Divison" name="dept" class="dropdown" >

      <option> Select Department </option>
	  <?php
	    foreach($rdept as $r)
		{
	  ?>
        
		<option value="<?php echo $r['d_id']; ?>">
		<?php echo $r['dept']; ?> 
		</option>
		<?php
		}
		?>
		
</select> </td>
</tr>
</div>

<tr>
<td> Attendance </td>
<td> <input class="form-control" placeholder="Attendance" type="text" name="att"/> </td>
</tr>

<td colspan="2" align="center"> <button class="btn btn-info" type="submit" name="insert" value="Submit"  > Submit </button>
		  </td></center>
		  </tr>


<?php include_once('excel.php'); ?> 

	 
</div>
</div>	 
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
