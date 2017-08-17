<?php


error_reporting(0);

include('model.php');
$obj=new model();

$i = $_SESSION['id'];

   //fetch subject
 $re=$obj->sel();

 //insert_reg
if(isset($_REQUEST['insert']))
  {
  	 $en=$_REQUEST['enroll'];
     $r=$_REQUEST['rno'];
	 $f=$_REQUEST['fname'];
	 $p=$_REQUEST['no'];
	 $pass=$_REQUEST['pass'];
	
	
	 $s=$_REQUEST['semester'];
	 $d=$_REQUEST['divison'];
	 $dept=$_REQUEST['dept'];
	 $a=$_REQUEST['att'];
	 
	 
	 $reg=$obj->r_ins($en,$r,$f,$p,$pass,$s,$d,$dept,$a);
	 
	// header('location:freg.php');
	
	
   }
   
   //insert_reg_faculity
if(isset($_REQUEST['insertf']))
  {
  	  $df=$_REQUEST['dept'];
     $fn=$_REQUEST['name'];
		 
	 
	 $fr=$obj->f_ins($df,$fn);
	 
	 header('location:freg.php');
	
	
   }
   
   
   //select_dept_for_reg_insert_faculty
 $rdept=$obj->dept();

   
    //select_faculty_sf
	
 $sfre=$obj->sf();
 
 //select_subject_sf
	
 $sfre1=$obj->sf1();
 
 
 //insert_sf
  
  if(isset($_REQUEST['sf']))
  {
  	
     $sff=$_REQUEST['faculty'];
	 $sfs=$_REQUEST['sem'];
	 $sfd=$_REQUEST['div'];
	 $sfsub=$_REQUEST['sub'];
	 
	 
	 $sfr=$obj->sf_ins($sff,$sfs,$sfd,$sfsub);
	 
	 header('location:faculty_reg.php');
	
	
   }

   //login
	if(isset($_REQUEST['login1']))
	{
		$u = $_REQUEST['email'];
		$p = $_REQUEST['pass'];
		
		$res = $obj->login($u,$p);
		$row=mysql_fetch_array($res);
		$rw = mysql_num_rows($res);
		
		$at=$obj->att($u);
		//echo $at;
		$rowat=mysql_fetch_array($at);
		
		$rwat=mysql_num_rows($at);
		
		if($rw==1)
		{
			$_SESSION['id'] = $row['id'];	
			$_SESSION['name'] = $row['fname'];
			$a=$_SESSION['atte'] = $rowat['attendance'];
			
			
			if($rwat==1)
			{
				if($a>=70.000)
				{
			
					 header('location:p4.php');
				}
				else
				{
					echo "Your Attendance is 'LOW'";
				}
			}	 
		}
		else
		{
			echo "Wrong";
		?>
		
			<script type="text/javascript">
		   alert(<?php echo "Wrong"; ?>);
		 </script> 
		 <?php
		}
	 
   }

?>
   		
    
	 


<?php
		
		 
		
		
	 //recover_password
  
  if(isset($_REQUEST['recover']))
  {
       $e=$_REQUEST['email1']; 
	   
	   
      $rec=$obj->recover($e);
	  $pa=$rec['password'];
	  
	 echo "Password is:".$pa; 
	 ?>
	 
	    <script type="text/javascript">
		   alert(<?php echo $pa; ?>);
		 </script>  
	 <?php 
  }

  
  //select_subject_sf
	
 $sfre1=$obj->sf1();
        

 
   //feedback_select
	if(isset($_REQUEST['sem']) && isset($_REQUEST['div'])){
		$fe=isset($_REQUEST['sem'])?$_REQUEST['sem']:'';
		$fe1=isset($_REQUEST['div'])?$_REQUEST['div']:'';
		
		if($fe != '' && $fe1 != ''){
		
			$fe2=$obj->pro($fe,$fe1);
			
			
		}	
		
	}
   	
		
	
	 
		
	//feedback
	
	if(isset($_REQUEST['feedback']))
    {
		$insData = $_REQUEST;
				
		for($i=0;$i<=count($insData['fname']);$i++){
			$fb=$obj->fb_ins($insData['semester'][$i],$insData['divison'][$i],$insData['sname'][$i],$insData['fname'][$i],$insData['point'][$i]);
		}
		
    }	   
	
		?>

