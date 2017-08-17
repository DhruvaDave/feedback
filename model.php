<?php


error_reporting(0);
class model
{
  public function model()
  {
    mysql_connect("localhost","root","");
	mysql_select_db("be_5");
  }

   //fetch Subject
  public function sel()
  {
   $sql="select * from subject";
   $q=mysql_query($sql);
 while($fetch=mysql_fetch_array($q))
 {
    $data[]=$fetch;
 }
 return $data;
  }
 
  //reg_insert
  
  public function r_ins($en,$r,$f,$p,$pass,$s,$d,$dept,$a)
  {
   $ins="insert into student(enroll,rollno,fname,phoneno,password,semester,divison,depart,attendance) values ('$en','$r','$f','$p','$pass','$s','$d','$dept','$a')";
	
	 $ins1=mysql_query($ins);
	// print_r $ins1;
	 
  }

   //reg_insert_faculty
  
  public function f_ins($df,$fn)
  {
     $fins="insert into faculty(dept_f,fname) values('$df','$fn')";
	
	 $fins1=mysql_query($fins);
	 
	 
  }
  
  //select_dept_for_reg_insert_faculty
  
  public function dept()
  {
   $de="select * from department";
   $dept=mysql_query($de);
 while($fdept=mysql_fetch_array($dept))
 {
    $ddept[]=$fdept;
 }
 return $ddept;
  }
 
  
  //select_faculty_sf
  
  public function sf()
  {
   $sf="select * from faculty";
   $sfq=mysql_query($sf);
 while($sffetch=mysql_fetch_array($sfq))
 {
    $sfdata[]=$sffetch;
 }
 return $sfdata;
  }
  
  //select_subject_sf
  
  public function sf1()
  {
   $sf1="select * from subject";
   $sfq1=mysql_query($sf1);
 while($sffetch1=mysql_fetch_array($sfq1))
 {
    $sfdata1[]=$sffetch1;
 }
 return $sfdata1;
  }
  
  //insert_sf
  
  public function sf_ins($sff,$sfs,$sfd,$sfsub)
  {
     $sfins="insert into sf(faculty,semester,divison,subject_name) values('$sff','$sfs','$sfd','$sfsub')";
	
	 $sfins1=mysql_query($sfins);
	 
	 
  }
  
  //login
  
 public function login($u,$p)
	{
		 
		 $sel = "select * from student where enroll = '$u' and password = '$p'";
		
	
		$ex = mysql_query($sel);
		return $ex;
	}
	public function att($u)
	{
		 $s="select attendance from student where enroll='$u'";
		 $se=mysql_query($s);
		 	return $se;
		 	
	}
	
	//recover_password
	 
	 public function recover($e)
	 {
	     
	    $re="select password from student where enroll='$e'";
		$rre=mysql_query($re);
		$rre1=mysql_fetch_array($rre);	
		return $rre1;
	 }
	
	
	 
  //feedback_select
  
  public function pro($fe,$fe1)
  {
  
      
     // $pr="select faculty.fname,subject.sname,sf.divison,sf.semester from sf join faculty on sf.faculty=faculty.fid join subject on sf.subject_name=subject.sid";
	$data1 = array();
	   $pr="select faculty.fname,subject.sname,sf.divison,sf.semester from sf join faculty on sf.faculty=faculty.fid join subject on sf.subject_name=subject.sid where sf.semester='$fe' and sf.divison='$fe1'";
	 
	  
	    $q1=mysql_query($pr);
	   while($fetch1=mysql_fetch_array($q1))
	   {
   			 $data1[]=$fetch1;
 	   }
	  
 		return $data1;
  }
  
  //feedback
  
  public function fb_ins($semester, $divison, $subject, $faculty, $point)
  {
  	
	 
	 $insSql = "INSERT INTO `feedback` (`semester`, `divison`, `subject`, `faculty`, `point`) VALUES ($semester, '$divison', '$subject', '$faculty', $point);";
	//echo $faa;
	mysql_query($insSql);
	 
	 
  }

 
}

?>