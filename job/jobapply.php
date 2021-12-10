<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <?php
session_start();


echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/halkat">Train->Job</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/halkat">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/halkat/about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/halkat/contact.php">Contact Us</a>
      </li>
    </ul>';

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo '<form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
      </form>
      <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle mx-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        profile
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">'.$_SESSION['email'].'</a></li>
      </ul>
    </div>
    <a href="partials2/_logout.php" class="btn btn-outline-success ml-2">Logout</a>';
    }
    
    else{
      echo '<form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>';

    }


  echo '</div>
</div>
</nav>';
?>

    <?php
    
    $method = $_SERVER['REQUEST_METHOD'];
    $alertmake = false;
    if($method=='POST'){
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        header("location: jobapply.php");
      }
      else{
        header("Location: /halkat/index.php?jobapplyfailed=true");
        }
      }

?>

    <div class="container" style="margin-top: 60px; margin-bottom: 60px;">
        <?php
        $jname = $_GET['job_name'];
        ?>


        <form action="/halkat/job/jobapplyhandle.php?job_name=<?php echo $jname?>" method="post">
        <h3>Job name: <?php echo $jname?></h3>
            <div class="mb-3">
                <label for="fullname" class="form-label">
                    <h5>Enter your full name</h5>
                </label>
                <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">
                    <h5>Enter your email</h5>
                </label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="fresher" class="form-label">
                    <h5>Are you a fresher</h5>
                </label>
                <input type="text" class="form-control" id="fresher" name="fresher">
                <div id="exampleInputPassword1" class="form-text">If fresher respond with yes</div>
            </div>
            <div class="mb-3">
                <label for="work" class="form-label">
                    <h5>Are you a able to work 8-9 hours</h5>
                </label>
                <input type="text" class="form-control" id="work" name="work">
                <div id="exampleInputPassword1" class="form-text">If not then eleborate why</div>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">
                    <h5>Why should you be hired for this role?</h5>
                </label>
                <input type="text" class="form-control" id="role" name="role">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">
                    <h5>Enter your phone number</h5>
                </label>
                <input type="phone" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="hour" class="form-label">
                    <h5>Are you able to work for 8-9 hours?</h5>
                </label>
                <input type="text" class="form-control" id="hour" name="hour">
                <div id="exampleInputPassword1" class="form-text">If not then what is your suitable time</div>
            </div>
            <div class="mb-3">
                <label for="exp" class="form-label">
                    <h5>Do you have experience in working for company like this</h5>
                </label>
                <input type="text" class="form-control" id="exp" name="exp">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php

echo '<div class="card text-center mb-0" >
<div class="card-header bg-dark text-light">
  Copyright  Train->Job  2021 | All rights reserved</div>
<div class="card-body mb-0">
  <p class="card-text mb-0">With your help we will keep delevering best content.</p>
</div>
</div>';

?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>