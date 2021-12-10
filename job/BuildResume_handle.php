<!-- All resume code need to write here -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Job-2</title>
    <style>
    .container {
        border: 2px solid black;
    }
    </style>
</head>

<body>
    <?php include 'partials2/_header1.php'?>


    <?php

    $link = mysqli_connect("localhost", "root", "", "project");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
    $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $location = mysqli_real_escape_string($link, $_REQUEST['location']);
    $education = mysqli_real_escape_string($link, $_REQUEST['education']);
    $jobs1 = mysqli_real_escape_string($link, $_REQUEST['job1']);
    $jobs2 = mysqli_real_escape_string($link, $_REQUEST['job2']);
    $internship1 = mysqli_real_escape_string($link, $_REQUEST['internship1']);
    $internship2 = mysqli_real_escape_string($link, $_REQUEST['internship2']);
    $academic = mysqli_real_escape_string($link, $_REQUEST['academic']);
    $skills1 = mysqli_real_escape_string($link, $_REQUEST['skills1']);
    $skills2 = mysqli_real_escape_string($link, $_REQUEST['skills2']);
    $skills3 = mysqli_real_escape_string($link, $_REQUEST['skills3']);
    $skills4 = mysqli_real_escape_string($link, $_REQUEST['skills4']);
    $portfolio = mysqli_real_escape_string($link, $_REQUEST['portfolio']);


    $sql = "INSERT INTO `resume` (`fname`, `phone`,`email`, `location`, `education`, `job1`, `job2`, `internship1`, `internship2`, `academic`, `skills1`, `skills2`, `skills3`, `skills4`, `portfolio`, `time`) VALUES ('$fname', '$phone','$email', '$location', '$education', '$jobs1', '$jobs2', '$internship1', '$internship2', '$academic', '$skills1', '$skills2', '$skills3', '$skills4', '$portfolio', current_timestamp())";

    if(mysqli_query($link, $sql)){
    if($_SESSION['email']==$email){
        header("Location: /halkat/job/entername_handle.php?email=$email");
    }
    else{
        header("Location: /halkat");
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>Please enter email use while signing in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    // header("Location: /halkat/job/entername.php");
    } 
    else{
        header('location: /halkat');
    }

    mysqli_close($link);
    
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