<?php
include 'conn.php';

function pharmacy_login($email,$pwd)
{
	global $conn;
    session_start();
 $query="select * from pharmacy where Email='$email' and Password='$pwd'";
$result = $conn->query($query);

	if ($result->num_rows > 0) {

		$row = $result->fetch_assoc();
        
if($row['ph_status']=='1')
{
    $_SESSION["p_email"] = $email;
        $_SESSION["pha_id"] = $row['pha_id'];
        header('Location:dashboard.php?msg=Login Successfully');
}
else
{
   header('Location:index.php?msg=Pharmacy Not Verfiy By The Admin');
   
}
    
    } 
else {
  header('Location:index.php?msg=Username and Password is Wrong');
    }
}


function no_medicine($pha_id)
{
   global $conn;

$sql="select count(*) as total_medicine from medicine where pha_id='$pha_id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;  
}




function medicine_list($pha_id)
{
    global $conn;
    $sql="select * from medicine where pha_id='$pha_id'";
    $result = $conn->query($sql);
    return $result;
}

function add_medicine($medicine_name,$medicine_price,$medicine_potency,$medicine_date,$medicine_desc,$pha_id)
{
      global $conn;

    $sql="INSERT INTO `medicine`(`Medic_Name`, `Description`, `Price`, `Potency`, `ExpiryDate`, `pha_id`) VALUES ('$medicine_name','$medicine_desc','$medicine_price','$medicine_potency','$medicine_date','$pha_id')";
    if($conn->query($sql)=== TRUE)
    {
        header('Location:add_medicine.php?msg=Medicine Added Successfully');
    }
    else
    {
header('Location:add_medicine.php?msg=Error in record add');
    }

}

?>