<?php


error_reporting(0);
class model
{
  public function model()
  {
    mysql_connect("localhost","root","");
	mysql_select_db("be_5");
  }

	//show_faculty
	public function sel_fac()
	{
 
    $se="select * from feedback";
	$see=mysql_query($se);
	 while($fe=mysql_fetch_array($see))
	{
	   $se_fac[]=$fe;
	}

	return $se_fac;
 }
   //fetch Faculty
  public function sel($fid)
  {
   $sql="select * from feedback where faculty='$fid'";
   $q=mysql_query($sql);
 while($fetch=mysql_fetch_array($q))
 {
    $data[]=$fetch;
 }
 return $data;
  }
  
  //fetch points for faculty
  public function selp($fid)
  {
  	 $e="select avg(point)  from feedback where faculty='$fid'";
	$ee=mysql_query($e);  
	return $ee;
  }
   //fetch Subject
  public function sub($sid)
  {
   $s="select * from feedback where subject='$sid'";
   $qu=mysql_query($s);
 while($fet=mysql_fetch_array($qu))
 {
    $da[]=$fet;
 }
 return $da;
  }

  
 }
?>