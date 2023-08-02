<?php
include 'conn.php';

function doctor_login($email,$pwd)
{
	global $conn;
    session_start();
 $query="select * from registerdoctor where Email='$email'";
$result = $conn->query($query);

	if ($result->num_rows > 0) {

		$row = $result->fetch_assoc();
        $newHash = $row['D_Password'];
if (password_verify($pwd,$newHash)) {
    if($row['d_status']=='1')
    {
        $_SESSION["d_email"] = $email;
        $_SESSION["d_id"] = $row['d_id'];
        header('Location:dashboard.php?msg=Login Successfully');
    }
    else
    {
        echo "Doctor is not Verify by the admin";
        header('Location:index.php?msg=Doctor is not Verify by the admin');

    }

}
else
{
      header('Location:index.php?msg=Username and Password is Wrong');

}
		
  
} else {
  header('Location:index.php?msg=Username and Password is Wrong');
}



}

function appionemnt_list($d_id)
{
    global $conn;
    $sql="select * from doc_appionmnet,registerpatient where registerpatient.p_id=doc_appionmnet.p_id and  doc_appionmnet.d_id='$d_id'";
    $result = $conn->query($sql);
    return $result;
}

function no_blog($d_id)
{
        global $conn;

$sql="select count(*) as total_blog from blog where d_id='$d_id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}
function no_news($d_id)
{
     global $conn;

$sql="select count(*) as total_news from news where d_id='$d_id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row; 
}

function no_remedies($d_id)
{
   global $conn;

$sql="select count(*) as total_remedies from remedies where D_id='$d_id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}

function add_news($news_title,$news_date,$news_desc,$d_id)
{
    global $conn;

    $sql="INSERT INTO `news`(`d_id`, `NewsLetter`, `new_title`, `new_date`) VALUES ('$d_id','$news_desc','$news_title','$news_date')";
    if($conn->query($sql)=== TRUE)
    {
        header('Location:add_news.php?msg=News Added Successfully');
    }
    else
    {
header('Location:add_news.php?msg=Error in record add');
    }
}


function add_remedies($rem_title,$rem_date,$rem_desc,$d_id)
{
  global $conn;

    $sql="INSERT INTO `remedies`( `D_Id`, `Subject`, `Description`, `rem_date`) VALUES ('$d_id','$rem_title','$rem_desc','$rem_date')";
    if($conn->query($sql)=== TRUE)
    {
        header('Location:add_remedies.php?msg=Remedies Added Successfully');
    }
    else
    {
header('Location:add_remedies.php?msg=Error in record add');
    }  
}

function blog_list($d_id)
{
      global $conn;

    $sql="select * from blog where d_id='$d_id'";
    $result = $conn->query($sql);
    return $result;
}
function news_list($d_id)
{
      global $conn;

    $sql="select * from news where d_id='$d_id'";
    $result = $conn->query($sql);
    return $result;
}
function remedies_list($d_id)
{
      global $conn;

     $sql="select * from remedies where D_Id='$d_id'";
    $result = $conn->query($sql);
    return $result;
}
?>