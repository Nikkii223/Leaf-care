<?php
include 'conn.php';

if(isset($_GET['c_a_id']))
{
	$a_p_id=$_GET['c_a_id'];

	$sql="UPDATE doc_appionmnet SET a_status='3' WHERE d_a_id='$a_p_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:doc_ap.php?msg=Appionment Status Updated Successfully');
	}
	else
	{
      header('Location:doc_ap.php?msg=Appionment Status Updated Error');
	}

}
if(isset($_GET['a_a_id']))
{
	$a_p_id=$_GET['a_a_id'];

	$sql="UPDATE doc_appionmnet SET a_status='1' WHERE d_a_id='$a_p_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:doc_ap.php?msg=Appionment Status Updated Successfully');
	}
	else
	{
      header('Location:doc_ap.php?msg=Appionment Status Updated Error');
	}

}


if(isset($_GET['a_b_id']))
{
	$b_id=$_GET['a_b_id'];

	$sql="UPDATE blog SET b_status='1' WHERE b_id='$b_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:blog_list.php?msg=Blog Status Updated Successfully');
	}
	else
	{
      header('Location:blog_list.php?msg=Blog Status Updated Error');
	}

}
if(isset($_GET['b_b_id']))
{
	$b_id=$_GET['b_b_id'];

	$sql="UPDATE blog SET b_status='0' WHERE b_id='$b_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:blog_list.php?msg=Blog Status Updated Successfully');
	}
	else
	{
      header('Location:blog_list.php?msg=Blog Status Updated Error');
	}

}
if(isset($_GET['d_b_id']))
{
	$b_id=$_GET['d_b_id'];

	$sql="DELETE FROM blog WHERE b_id='$b_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:blog_list.php?msg=Blog Deleted Successfully');
	}
	else
	{
      header('Location:blog_list.php?msg=Blog Deleted Error');
	}

}

// Blog Over

if(isset($_GET['d_News_Id']))
{
	$News_Id=$_GET['d_News_Id'];

	$sql="DELETE FROM news WHERE News_Id='$News_Id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:news_list.php?msg=News Deleted Successfully');
	}
	else
	{
      header('Location:news_list.php?msg=News Deleted Error');
	}

}

//News

if(isset($_GET['d_Rem_Id']))
{
	$Rem_Id=$_GET['d_Rem_Id'];

	$sql="DELETE FROM remedies WHERE Rem_Id='$Rem_Id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:remedies_list.php?msg=Remedies Deleted Successfully');
	}
	else
	{
      header('Location:remedies_list.php?msg=Remedies Deleted Error');
	}

}



?>