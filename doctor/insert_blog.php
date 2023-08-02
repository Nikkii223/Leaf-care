<?php
include 'conn.php';
session_start();
$blog_title=$_POST['blog_title'];
// $blog_desc=$_POST['blog_desc'];
$d_id=$_SESSION["d_id"];
$blog_desc = stripslashes($_POST['blog_desc']);


$target_dir = "../uploads/";
 $target_file_blog_image = $target_dir . basename($_FILES["blog_image"]["name"]);
 $imageFileType_blog_image = strtolower(pathinfo($target_file_blog_image,PATHINFO_EXTENSION));

if($imageFileType_blog_image!="jpg" && $imageFileType_blog_image!="png")
{
header('Location:add_blog.php?msg=Invalid Image File');
}

date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
$today= date('Y-m-d');



$blog_logo_name=$target_dir. "b_pic".date('dmYHis').str_replace(" ", "", basename($_FILES["blog_image"]["name"]));
if (move_uploaded_file($_FILES["blog_image"]["tmp_name"], $blog_logo_name)) {

echo $sql="INSERT INTO `blog`(`d_id`, `b_title`, `b_image`, `b_desc`, `b_date`, `b_status`) VALUES ('$d_id','$blog_title','$blog_logo_name','$blog_desc','$today','0')";

		if($conn->query($sql)=== TRUE)
		{
		header('Location:add_blog.php?msg=Blog Added Successfully');
		}
		else
		{
		header('Location:add_blog.php?msg=Error in Blog Add');
		}

	}
	


?>