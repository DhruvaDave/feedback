<?php
  include_once('controlf.php');

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
						<li><a href="faculty_reg.php">Faculty Registration</a></li>
						<li><a href="sreg.php">Student Registration</a></li>
						<li><a href="sf.php">Subject Allocation</a></li>
						
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
								<h4 class="title"> Feedback Search By Faculty </h4>
								
							</div>
				
<div class="card-content table-responsive">
<table class="table">

<div class="col-sm-4">
	<div class="form-group">


	 <tr>
 <td> Faculty </td>
 <td> Subject </td>
 <td> Semester </td>
 <td> Points </td>
 </tr>
 
  <?php
					 foreach($fac as $c)
					 {
					 ?>
				
 
 <tr>
 <td> <?php echo $c['faculty']; ?> </td>
 <td> <?php echo $c['subject']; ?> </td>
 <td> <?php echo $c['semester']; ?> </td>
 <td> <?php echo $c['point']; ?> </td>
 </tr>

	 <?php
	  
	  }
	  
	  ?>
	  <tr> 
	  <td> Average </td>
	  </tr>
	  <tr>
	  <td> <?php echo  $fp; ?> </td>
	  </tr>
       

</table>
<input type="submit" name="sap" value="save as pdf"/>

<?php


?>

</div></div></div></div>
</form>
</div></div></div></div></div></div>
</center>

<?php
?>

<?php include_once('footer.html'); ?>

</body>
</html>