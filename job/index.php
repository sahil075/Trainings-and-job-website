<!-- INSERT INTO `job` (`job_id`, `job_name`, `job_desc`) VALUES ('1', 'Android app developer', 'Mumbai, Fresher job'); -->

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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Job-Portal</title>
</head>

<body>



    <!------ Include the above in your HEAD tag ---------->

    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <?php

        session_start();
        
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo'
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/halkat">
                        Train->Job
                    </a>
                </li>
                <li>
                    <a href="/halkat">Home</a>
                </li>
                <li>
                    <a href="jobapplication.php">My application</a>
                </li>
                <li>
                    <a href="BuildResume.php">Build resume</a>
                </li>
                <li>
                    <a href="/halkat/contact.php">Help-ContactUs</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">another</li>
                        <li><a href="#">Manage account</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
                

            </ul>
        </nav>';
        }
        else{
            echo'
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/halkat">
                        Train->Job
                    </a>
                </li>
                <li>
                    <a href="/halkat">Home</a>
                </li>
                <li>
                    <a href="/halkat/contact.php">Help-ContactUs</a>
                </li>
                

            </ul>
        </nav>';
        }

        ?>
        <!-- /#sidebar-wrapper -->


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!--<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
    </button> -->

            <button type="button" class="btn btn-lg custom-btn" data-toggle="offcanvas">
                <i class="fa fa-bars"></i>
            </button>

            <div class="container my-3">
                <center>
                    <div class="card-header py-3 text-white bg-primary border-primary">
                        <h1 class="my-0 fw-normal">Fresher Jobs</h1>
                    </div>

                </center>
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <br>
                    <?php 
                
                $sql = "SELECT * FROM `job`";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $jid = $row['job_id'];
                    $jname = $row['job_name'];
                    $jdesc = $row['job_desc'];
                    $date = $row['job_date'];
                    $salary = $row['job_salary'];
                    $Dateby = $row['job_applyby'];
                    echo '
                    <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-body">
                            <h2 style="color: black; font-size: 32px; font-weight: bold;" class="card-title pricing-card-title" style="font-size:29px;">'.$jname.'</h2>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><h4 style="font-size: 20px; font-weight: lighter;">Start Date: '.$date.'</h4></li>
                                <li><h4 style="font-size: 20px;">CTC: '.$salary.'</h4></li>
                                <li><h4 style="font-size: 20px;">Apply By: '.$Dateby.'</h4></li>
                                <li>'.$jdesc.'</li>
                            </ul>
                            <a class="btn btn-primary" href="job1.php?jobsid='.$jid.'">View</a>
                        </div>
                    </div>
                </div>
                <br> <hr>';
                     
                }
                
                ?>
                </div>
            </div>











            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous">
            </script>
            <script src="script.js"></script>
</body>

</html>