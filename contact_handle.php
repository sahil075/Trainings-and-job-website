<?php
$link = mysqli_connect("localhost", "root", "", "project");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$desc1 = mysqli_real_escape_string($link, $_REQUEST['desc1']);


$sql = "INSERT INTO `contact` (`name`, `email`, `pno`, `desc1`) VALUES ('$name', '$email', '$phone', '$desc1');";
if(mysqli_query($link, $sql)){
  header("Location: /halkat/index.php?contactsuccess=true");
} 
else{
    header('location: /halkat');
}
 

mysqli_close($link);
?>