<?php
include 'conn.php';

if(isset($_GET['c_a_id']))
{
	$a_p_id=$_GET['c_a_id'];

	$sql="UPDATE doc_appionmnet SET a_status='2' WHERE d_a_id='$a_p_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:appionment_list.php?msg=Appionment Status Updated Successfully');
	}
	else
	{
      header('Location:appionment_list.php?msg=Appionment Status Updated Error');
	}

}



if(isset($_GET['a_d_id']))
{
	$d_id=$_GET['a_d_id'];

	$sql="UPDATE registerdoctor SET d_status='1' WHERE d_id='$d_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:doctor_list.php?msg=Doctor Status Updated Successfully');
	}
	else
	{
      header('Location:doctor_list.php?msg=Doctor Status Updated Error');
	}

}
if(isset($_GET['b_d_id']))
{
	$d_id=$_GET['b_d_id'];

	$sql="UPDATE registerdoctor SET d_status='0' WHERE d_id='$d_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:doctor_list.php?msg=Doctor Status Updated Successfully');
	}
	else
	{
      header('Location:doctor_list.php?msg=Doctor Status Updated Error');
	}

}
if(isset($_GET['d_d_id']))
{
	$d_id=$_GET['d_d_id'];

	$sql="DELETE FROM registerdoctor WHERE d_id='$d_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:doctor_list.php?msg=Doctor Deleted Successfully');
	}
	else
	{
      header('Location:doctor_list.php?msg=Doctor Deleted Error');
	}

}


if(isset($_GET['a_p_id']))
{
	$p_id=$_GET['a_p_id'];

	$sql="UPDATE registerpatient SET u_status='1' WHERE p_id='$p_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:user_list.php?msg=User Status Updated Successfully');
	}
	else
	{
      header('Location:user_list.php?msg=User Status Updated Error');
	}

}
if(isset($_GET['b_p_id']))
{
	$p_id=$_GET['b_p_id'];

	$sql="UPDATE registerpatient SET u_status='0' WHERE p_id='$p_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:user_list.php?msg=User Status Updated Successfully');
	}
	else
	{
      header('Location:user_list.php?msg=User Status Updated Error');
	}

}
if(isset($_GET['d_p_id']))
{
	$p_id=$_GET['d_p_id'];

	$sql="DELETE FROM registerpatient WHERE p_id='$p_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:user_list.php?msg=User Deleted Successfully');
	}
	else
	{
      header('Location:user_list.php?msg=User Deleted Error');
	}

}


if(isset($_GET['a_c_id']))
{
	$c_id=$_GET['a_c_id'];

	$sql="UPDATE clinic SET c_status='1' WHERE c_id='$c_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:clinic_list.php?msg=Clinic Status Updated Successfully');
	}
	else
	{
      header('Location:clinic_list.php?msg=Clinic Status Updated Error');
	}

}
if(isset($_GET['b_c_id']))
{
	$c_id=$_GET['b_c_id'];

	$sql="UPDATE clinic SET c_status='0' WHERE c_id='$c_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:clinic_list.php?msg=Clinic Status Updated Successfully');
	}
	else
	{
      header('Location:clinic_list.php?msg=Clinic Status Updated Error');
	}

}
if(isset($_GET['d_c_id']))
{
	$c_id=$_GET['d_c_id'];

	$sql="DELETE FROM clinic WHERE c_id='$c_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:clinic_list.php?msg=Clinic Deleted Successfully');
	}
	else
	{
      header('Location:clinic_list.php?msg=Clinic Deleted Error');
	}

}


if(isset($_GET['a_pha_id']))
{
	$pha_id=$_GET['a_pha_id'];

	$sql="UPDATE pharmacy SET ph_status='1' WHERE pha_id='$pha_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:pharmacy_list.php?msg=Pharmacy Status Updated Successfully');
	}
	else
	{
      header('Location:pharmacy_list.php?msg=Pharmacy Status Updated Error');
	}

}
if(isset($_GET['b_pha_id']))
{
	$pha_id=$_GET['b_pha_id'];

	$sql="UPDATE pharmacy SET ph_status='0' WHERE pha_id='$pha_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:pharmacy_list.php?msg=Pharmacy Status Updated Successfully');
	}
	else
	{
      header('Location:pharmacy_list.php?msg=Pharmacy Status Updated Error');
	}

}
if(isset($_GET['d_pha_id']))
{
	$pha_id=$_GET['d_pha_id'];

	$sql="DELETE FROM pharmacy WHERE pha_id='$pha_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:pharmacy_list.php?msg=Pharmacy Deleted Successfully');
	}
	else
	{
      header('Location:pharmacy_list.php?msg=Pharmacy Deleted Error');
	}

}



if(isset($_GET['a_h_id']))
{
	$h_id=$_GET['a_h_id'];

	$sql="UPDATE hospital SET h_status='1' WHERE h_id='$h_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:hospital_list.php?msg=Hospital Status Updated Successfully');
	}
	else
	{
      header('Location:hospital_list.php?msg=Hospital Status Updated Error');
	}

}
if(isset($_GET['b_h_id']))
{
	$h_id=$_GET['b_h_id'];

	$sql="UPDATE hospital SET h_status='0' WHERE h_id='$h_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:hospital_list.php?msg=Hospital Status Updated Successfully');
	}
	else
	{
      header('Location:hospital_list.php?msg=Hospital Status Updated Error');
	}

}
if(isset($_GET['d_h_id']))
{
	$h_id=$_GET['d_h_id'];

	$sql="DELETE FROM hospital WHERE h_id='$h_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:hospital_list.php?msg=Hospital Deleted Successfully');
	}
	else
	{
      header('Location:hospital_list.php?msg=Hospital Deleted Error');
	}

}
?>