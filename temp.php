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
								<h4 class="title">Search</h4>
								
							</div>
				
 <div class="card-content table-responsive">
<table class="table">

					  <ul >
					  <li>  By Faculty </li>
					  
					  <?php
				     foreach($see as $s)
					 {
				   ?>
				 <li>  <a href="feedbackbyf.php?fid=<?php echo $s['faculty']; ?>"><span><?php echo $s['faculty'];?></span></a> </li>
				   <?php
				   }
				   ?>
				   
				   </ul>
				   <ul>
				   <li> By Subject </li>
				    
					  <?php
				     foreach($see as $s)
					 {
				   ?>
					  <li><a href="feedbackbys.php?sid=<?php echo $s['subject']; ?>"><span><?php echo $s['subject'];?></span> </a>                       </li>
					  
					   <?php
				   }
				   ?>
				   
					</ul></li></ul>
	</div>
 
</div></div>
</table>
</div></div></div></div>
</form>
</div></div></div></div></div></div>
</center>

<?php

include('footer.html');

?>
</body>
</html>