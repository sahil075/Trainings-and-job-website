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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
  </head>
  <body>
  <?php include 'partials2/_header1.php'?>


  <br><br>
  <div class="container" id="ques">
        <h1 style="margin-left: 4px;">My applications</h1>
        <br>

        <table class="table table-striped">

            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Employment type</th>
                <th>Application status</th>
                <th>Job applied</th>
            </tr>

            <?php

            $sql1 = "SELECT * FROM `jobapply`";
            // $sql2 = "SELECT * FROM `users`";
            $result = mysqli_query($conn,$sql1);
            // $result1 = mysqli_query($conn,$sql2);
            while($row = mysqli_fetch_assoc($result)){
                $full_name = $row['full_name'];
                $phone = $row['phone'];
                $email = $row['email'];
                $jname = $row['jobapply'];
                if($_SESSION['email']==$email){
                echo '

            <tr>
                <td>'.$full_name.'</td>
                <td>'.$phone.'</td>
                <td>'.$email.'</td>
                <td>Fresher</td>
                <td>Applied</td>
                <td>'.$jname.'</td>
            </tr>';
                }
                
            }
        ?>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <?php include 'partials2/_footer.php'?>
  </body>
</html>