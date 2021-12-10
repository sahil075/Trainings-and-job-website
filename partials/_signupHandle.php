<?php
$showAlert = "false";
$showError = "false";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $copass = $_POST['copass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    // Check whether this email exists
    $existSql = "select * from `users` where email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($pass == $copass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`email`, `pass`, `fname`, `lname`, `date`) VALUES ('$email', '$hash', '$fname', '$lname', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                $showAlert = true;
                header("Location: /halkat/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError = "password dont match";
        }
    }
    header("Location: /halkat/index.php?signupsuccess=false&error=$showError");

}
?>