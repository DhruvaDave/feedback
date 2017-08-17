<?php 
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Tutorial Components - Material Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>
	<link href="css/demo-documentation.css" rel="stylesheet" />

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

	<style>
		pre.prettyprint{
		    background-color: #eee;
		    border: 0px;
		    margin-bottom: 60px;
		    margin-top: 30px;
		    padding: 20px;
		    text-align: left;
		}
		.atv, .str{
		    color: #05AE0E;
		}
		.tag, .pln, .kwd{
		    color: #3472F7;
		}
		.atn{
		    color: #2C93FF;
		}
		.pln{
		    color: #333;
		}
		.com{
		    color: #999;
		}
		.space-top{
		    margin-top: 50px;
		}
		.area-line{
		    border: 1px solid #999;
		    border-left: 0;
		    border-right: 0;
		    color: #666;
		    display: block;
		    margin-top: 20px;
		    padding: 8px 0;
		    text-align: center;
		}
		.area-line a{
		    color: #666;
		}
		.container-fluid{
		    padding-right: 15px;
		    padding-left: 15px;
		}

	</style>
</head>

<body class="components-page">

<nav class="navbar navbar-transparent  navbar-fixed-top navbar-color-on-scroll" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <!--<a href="http://www.creative-tim.com">-->
           <div class="logo-container">
                <div class="logo">
                    <img src="../assets/img/new_logo.png" alt="Creative Tim Logo">
                </div>
                <div class="brand">
                    L.J.I.E.T
                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse text-center">
		<ul class="nav navbar-nav navbar-center">
			<li>
				<div class="navbar-title hidden text-center">
					<h4>
						<div class="image-container">
							
						</div>
						Feedback
					</h4>
				</div>
			</li>
		</ul>
		<ul  class="nav navbar-nav navbar-right">
			<li>
                <a href="">Have an issue?</a>
            </li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="page-header header-filter" style="background-image: url('../assets/img/');">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="image-header">
					<!-- LOGO of LJ -->
						<img src="">
					</div>

					<h1 class="title">L.J.I.E.T</h1>
					<h3 class="sub-title">Feedback</h3>
				</div>
			</div>
		</div>
	</div>

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
						<li><a href="temp.php">Search </a></li><br/>
                    </ul>
                </div>
            </div>
 			
			<!-- License Row -->
		
			</div> <!-- end container -->
		 </div> <!--  end col-md-8 -->
	 </div> <!-- end row -->
 </div> <!-- end first container-->
</div> <!-- end section -->


    <?php include('footer.html'); ?>
</body>
	
</html>
