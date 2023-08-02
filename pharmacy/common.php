<?php
include 'conn.php';


if(isset($_GET['d_med_id']))
{
	$med_id=$_GET['d_med_id'];

	$sql="DELETE FROM medicine WHERE med_id='$med_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:medicine_list.php?msg=Medicine Deleted Successfully');
	}
	else
	{
      header('Location:medicine_list.php?msg=Medicine Deleted Error');
	}

}






?>