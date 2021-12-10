<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// $email = mysqli_real_escape_string($conn, $_REQUEST['email']);


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Job-Portal1</title>
</head>

<body class=" text-white bg-dark">
    <?php include 'partials/_header.php'?>


    <?php
    $email = $_GET['email'];

    // $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $sql = "SELECT * FROM `resume` WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $fname = $row['fname'];
        $location = $row['location'];
        $phone = $row['phone'];
        $email = $row['email'];
        $education = $row['education'];
        $job1 = $row['job1'];
        $job2 = $row['job2'];
        $internship1 = $row['internship1'];
        $internship2 = $row['internship2'];
        $skills1 = $row['skills1'];
        $skills2 = $row['skills2'];
        $skills3 = $row['skills3'];
        $skills4 = $row['skills4'];
        $academic = $row['academic'];
        $portfolio = $row['portfolio'];
    }
    ?>

    <br>
    <div class="container" style="border: 2px solid white;">
    <br>
    <center><h1>Your resume</h1></center>
    <hr>
    <h2>Personal Detail: </h2>
      <p><?php echo $fname ?></p>
      <p><?php echo $email ?></p>
      <p><?php echo $location ?></p>
      <p><?php echo $phone ?></p>
    <hr>
    <h2>Education and Qualification: </h2>
      <p><?php echo $education ?></p>
    <hr>
    <h2>Jobs: </h2>
    <ul>
        <li><p><?php echo $job1 ?></p></li>
        <li><p><?php echo $job2 ?></p></li>
    </ul>
    <hr>
    <h2>Internships: </h2>
    <ul>
        <li><p><?php echo $internship1 ?></p></li>
        <li><p><?php echo $internship2 ?></p></li>
    </ul>
    <hr>
    <h2>Skills: </h2>
    <ul>
        <li><p><?php echo $skills1 ?></p></li>
        <li><p><?php echo $skills2 ?></p></li>
        <li><p><?php echo $skills3 ?></p></li>
        <li><p><?php echo $skills4 ?></p></li>
    </ul>
    <hr>
    <h2>Academic: </h2>
      <p><?php echo $academic ?></p>
    <hr>
    <h2>Portfolio: </h2>
      <p><?php echo $portfolio ?></p>

    
    </div>
    <br>
    <?php include 'partials/_footer.php'?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>