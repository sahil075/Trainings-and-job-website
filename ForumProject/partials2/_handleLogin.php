<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['Sno'];
            $_SESSION['email'] = $email;

            echo "logged in ". $email;
        }
        header("Location: /halkat/index.php");  
    }
    header("Location: /halkat/index.php"); 
}

?>