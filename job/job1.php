<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

$conn = mysqli_connect($servername,$username,$password,$database);


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Job-Portal1</title>
  </head>
  <body class=" text-white bg-dark">
    <?php include 'partials2/_header.php'?>


    



    <?php
    
    $jobid = $_GET['jobsid'];
    $sql = "SELECT * FROM `job` WHERE job_id = $jobid";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $jname = $row['job_name'];
        $jcompany = $row['company_name'];
        $jobdest = $row['job_dest'];
        $date= $row['job_date'];
        $salary = $row['job_salary'];
        $dateby = $row['job_applyby'];
        $jcompanydesc = $row['company_desc'];
        $actint1 = $row['activity_int1'];
        $actint2 = $row['activity_int2'];
        $actint3 = $row['activity_int3'];
        $jobskills1 = $row['job_skill1'];
        $jobskills2 = $row['job_skill2'];
        $jobskills3 = $row['job_skill3'];
        $jobskills4 = $row['job_skill4'];
        $jobrequire1 = $row['job_require1'];
        $jobrequire2 = $row['job_require2'];
        $jobrequire3 = $row['job_require3'];
        $jobrequire4 = $row['job_require4'];
        $jobrequire5 = $row['job_require5'];
        $jobopening = $row['job_opening'];
    }

?>


<?php
    
    
    $method = $_SERVER['REQUEST_METHOD'];
    $alertmake = false;
    if($method=='POST'){
      if(isset($_SESSION["loggedin"]) && $_SESSION['loggedin']==true){
        header("location: jobapply.php?job_name=$jname");
      }
      else{
        header("Location: /halkat/index.php?jobapplyfailed=true");
        }
      }
    ?>

<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
<br>
    <center>
    <main class="px-3">
    <h1><?php echo $jname?> at <?php echo $jcompany?></h1>
    </center>
  </main>
<br>
  <div class="container" style="border: 2px solid white;">
  <br>
      <p>Location: <?php echo $jobdest ?></p>
      <hr>
      <p>Start date: <?php echo $date ?></p>
      <p>CTC: <?php echo $salary ?> </p>
      <p>Apply by: <?php echo $dateby ?></p>
      <hr>
      <p>Fresher Job</p>
      <hr>
      <h4>About <?php echo $jcompany?> </h4>
      <p><?php echo $jcompanydesc?></p>
      <hr>
      <h4>Activities on Train->Job: </h4>
      <ul>
          <li><?php echo $actint1?></li>
          <li><?php echo $actint2?></li>
          <li><?php echo $actint3?></li>
      </ul>
      <hr>
      <h4>Skills required: </h4>
      <ul>
          <li><?php echo $jobskills1?></li>
          <li><?php echo $jobskills2?></li>
          <li><?php echo $jobskills3?></li>
          <li><?php echo $jobskills4?></li>
      </ul>
      <hr>
      <h4>Who can apply: </h4>
      <ol>
          <li><?php echo $jobrequire1?></li>
          <li><?php echo $jobrequire2?></li>
          <li><?php echo $jobrequire3?></li>
          <li><?php echo $jobrequire4?></li>
          <li><?php echo $jobrequire5?></li>
      </ol>
      <h4>Number of openings: </h4>
      <p><?php echo $jobopening?></p>
      <br>
      
      <center>
      <!-- <a class="w-80 btn btn-lg btn-success" href="jobapply.php"><b>Apply Now</b></a> -->
      <button type="submit" class="btn btn-success">Apply now</button>
      <!-- <a class="btn btn-primary" type="submit" href="jobapply.php?job_name=<?php echo $jname?>">Apply now</a> -->
      </center>
      <br>
  </form>

  </div>
  <br>



    <?php include 'partials/_footer.php'?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>