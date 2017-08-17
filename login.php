<?php
include_once('control.php');

?>
<!DOCTYPE html>
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
						<li><a href="logout.php">Logout</a></li>
						
						
                    </ul>
                </div>
            </div>
    
<div class="col-md-8 col-md-offset-1">
<div class="tim-row tim-row-first">


  <form method="post">
            <div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header" data-background-color="red">
								<h4 class="title"> Login </h4>
								
							</div>
				
<div class="card-content table-responsive">
<table class="table">

<div class="col-sm-4">
	<div class="form-group">


            <input type="text" placeholder="mail@domain.com" class="form-control" name="email">
            <input type="password" placeholder="Password" class="form-control" name="pass">
             
		    <div class="checkbox">
              <label>
                <input type="checkbox">Remember Me              </label>
            </div>
            <button class="btn btn-info" type="submit" name="login1" >LOGIN</button>
          </form>
        </div>
        <div id="forgot" class="tab-pane">
          <form method="post">
            <p class="text-muted text-center">Enter your valid e-mail</p>
            <input type="text" placeholder="mail@domain.com" class="form-control" name="email1">
			
            <br>
            <button class="btn btn-info" type="submit" name="recover">Recover Password</button>
          </form>
		
        </div>
       
      <hr>
           
         
        </ul>
      </div>
    </div>
	
   </body>
</html>
