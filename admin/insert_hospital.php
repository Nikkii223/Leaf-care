<?php
include 'conn.php';
$hospital_name=$_POST['hospital_name'];
$hospital_number=$_POST['hospital_number'];
$location=$_POST['location'];
$hospital_email=$_POST['hospital_email'];
$hospital_city=$_POST['hospital_city'];
$hospital_state=$_POST['hospital_state'];

$target_dir = "../uploads/";
 $target_file_hospital_logo = $target_dir . basename($_FILES["hospital_logo"]["name"]);
 $imageFileType_hospital_logo = strtolower(pathinfo($target_file_hospital_logo,PATHINFO_EXTENSION));

if($imageFileType_hospital_logo!="jpg" && $imageFileType_hospital_logo!="png")
{
header('Location:add_hospital.php?msg=Invalid Image File');
}

date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
$today= date('Y-m-d');



$hospital_logo_name=$target_dir. "h_pic".date('dmYHis').str_replace(" ", "", basename($_FILES["hospital_logo"]["name"]));
if (move_uploaded_file($_FILES["hospital_logo"]["tmp_name"], $hospital_logo_name)) {

$sql="INSERT INTO `hospital`(`h_name`, `h_email`, `h_address`, `h_pic`, `h_contact`, `city`, `state`, `h_status`, `h_regdate`) VALUES ('$hospital_name','$hospital_email','$location','$hospital_logo_name','$hospital_number','$hospital_city','$hospital_state','0','$today')";

		if($conn->query($sql)=== TRUE)
		{
		header('Location:add_hospital.php?msg=Hospital Added Successfully');
		}
		else
		{
		header('Location:add_hospital.php?msg=Error in Hospital Add');
		}

	}
	


?>