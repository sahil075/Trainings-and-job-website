<?php
$link = mysqli_connect("localhost", "root", "", "project");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$jname = $_GET['job_name'];

$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$fresher = mysqli_real_escape_string($link, $_REQUEST['fresher']);
$work = mysqli_real_escape_string($link, $_REQUEST['work']);
$role = mysqli_real_escape_string($link, $_REQUEST['role']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$hour = mysqli_real_escape_string($link, $_REQUEST['hour']);
$exp = mysqli_real_escape_string($link, $_REQUEST['exp']);


$sql = "INSERT INTO `jobapply` (`full_name`,`email`, `fresher`, `work`, `role`, `phone`, `hour`, `exp`,`jobapply`) VALUES ('$fullname','$email', '$fresher', '$work', '$role', '$phone', '$hour', '$exp','$jname')";
if(mysqli_query($link, $sql)){
  header("Location: /halkat/index.php?jobapplysuccess=true");

} 
else{
    header('location: /halkat');
}
 

mysqli_close($link);
?>