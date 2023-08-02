<?php
include 'conn.php';

function patient_login($email,$pwd)
{
	global $conn;
     session_start();
 echo $query="select * from registerpatient where Email='$email'";
$result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $newHash = $row['Password'];
if (password_verify($pwd,$newHash)) {
    if($row['u_status']=='1')
    {
        $_SESSION["p_email"] = $email;
        $_SESSION["p_id"] = $row['p_id'];
        header('Location:dashboard.php?msg=Login Successfully');
    }
    else
    {
        header('Location:index.php?msg=Patient is not Verify by the admin');

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

function update_feedback($p_id,$exap,$recommend)
{
    global $conn;
    date_default_timezone_set('Asia/Kolkata');
$today = date("Y-m-d");
    $sql="UPDATE `registerpatient` SET `Experience`='$exap',`Recommend`='$recommend' WHERE p_id='$p_id'";
    if($conn->query($sql)=== TRUE)
    {
        header('Location:feedback_form.php?msg=Feedback Updated Successfully');
    }
    else
    {
header('Location:feedback_form.php?msg=Error in Feedback Update');
    }
}
function book_appionment($p_id,$ap_date,$d_id)
{
    global $conn;
    date_default_timezone_set('Asia/Kolkata');
    $today = date("Y-m-d");
    $sql="INSERT INTO `doc_appionmnet`(`p_id`, `d_id`, `a_date`, `a_status`, `a_r_date`) VALUES ('$p_id','$d_id','$ap_date','0','$today')";
    if($conn->query($sql)=== TRUE)
    {
        header('Location:doctor_list.php?msg=Appointment Book Successfully');
    }
    else
    {
header('Location:doctor_list.php?msg=Error in Appointment Book');
    }
}

function appionemnt_list($p_id)
{
    global $conn;
    $sql="select * from doc_appionmnet,registerdoctor where registerdoctor.d_id=doc_appionmnet.d_id and  doc_appionmnet.p_id='$p_id'";
    $result = $conn->query($sql);
    return $result;
}

function doctor_list()
{
	global $conn;
	$sql="select * from registerdoctor where d_status='1'";
    $result = $conn->query($sql);
    return $result;
}

function no_doctor()
{
  global $conn;
    $sql="select count(*) as total_doctor from registerdoctor";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}

function doctor_list_by_id($d_id)
{

    global $conn;
    $sql="select * from registerdoctor where d_id='$d_id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;
}
function no_medicine()
{
  global $conn;
    $sql="select count(*) as total_medicine from medicine";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}

function user_list()
{
	global $conn;
	$sql="select * from registerpatient";
    $result = $conn->query($sql);
    return $result;
}

function user_list_by_id($p_id)
{
    global $conn;
    $sql="select * from registerpatient where p_id='$p_id'";
    $result = $conn->query($sql);
        $row=$result->fetch_assoc();

    return $row;
}

function no_hospital()
{
  global $conn;
    $sql="select count(*) as total_hospital from hospital";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}
function hospital_list()
{
	global $conn;
	$sql="select * from hospital where h_status='1'";
    $result = $conn->query($sql);
    return $result;
}

function hospital_list_by_id($h_id)
{
    global $conn;
    $sql="select * from hospital where h_id='$h_id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;
}
function no_pharmacy()
{
  global $conn;
    $sql="select count(*) as total_pharmacy from pharmacy";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}

function pharmacy_list()
{
	global $conn;
	$sql="select * from pharmacy where ph_status='1'";
    $result = $conn->query($sql);
    return $result;
}

function pharmacy_list_by_id($pha_id)
{
  global $conn;
    $sql="select * from pharmacy where pha_id='$pha_id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}
function no_clinic()
{
  global $conn;
    $sql="select count(*) as total_clinic from clinic";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}
function clinic_list()
{
	global $conn;
	$sql="select * from clinic where c_status='1'";
    $result = $conn->query($sql);
    return $result;

}

function clinic_list_by_id($c_id)
{
    global $conn;
    $sql="select * from clinic where c_id='$c_id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;
}

function no_news()
{
  global $conn;
    $sql="select count(*) as total_news from news";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}
function news_list()
{
	global $conn;
	$sql="select * from news";
    $result = $conn->query($sql);
    return $result;

}
function remedies_list()
{
	global $conn;
	$sql="select * from remedies,registerdoctor where registerdoctor.d_id=remedies.D_Id";
    $result = $conn->query($sql);
    return $result;

}

function add_clinic($clinic_name,$clinic_number,$location,$clinic_lat,$clinic_long,$start_time,$end_time,$clinc_city,$clinic_status)
{
	global $conn;
	date_default_timezone_set('Asia/Kolkata');
$today = date("Y-m-d");
	$sql="INSERT INTO `clinic`(`Clinic_Name`, `phone`, `Starting_Hours`, `Ending_Hours`, `Location`, `city`, `c_long`, `c_lat`, `c_status`, `c_date`) VALUES ('$clinic_name','$clinic_number','$start_time','$end_time','$location','$clinc_city','$clinic_long','$clinic_lat','0','$today')";
    if($conn->query($sql)=== TRUE)
    {
    	header('Location:add_clinic.php?msg=Clinic Added Successfully');
    }
    else
    {
header('Location:add_clinic.php?msg=Error in record add');
    }
}

function add_pharmacy($pharmacy_name,$pharmacy_number,$location,$pharmacy_email,$pharmacy_pwd,$start_time,$end_time,$pharmacy_city,$pharmacy_status)
{

    global $conn;
    date_default_timezone_set('Asia/Kolkata');
$today = date("Y-m-d");
    $sql="INSERT INTO `pharmacy`( `Phar_Name`, `Phar_Location`, `phr_city`, `StartingHours`, `EndingHours`, `PhoneNumber`, `Password`, `Email`, `ph_status`) VALUES ('$pharmacy_name','$location','$pharmacy_city','$start_time','$end_time','$pharmacy_number','$pharmacy_pwd','$pharmacy_email','0')";
    if($conn->query($sql)=== TRUE)
    {
        header('Location:add_pharmacy.php?msg=Pharmacy Added Successfully');
    }
    else
    {
header('Location:add_pharmacy.php?msg=Error in record add');
    }
}

?>