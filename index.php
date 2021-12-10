<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>CodeWithMixxz</title>
</head>



<body>
    <?php include 'partials/_header.php';?>
    <?php include 'partials/_dbconnect.php';?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="new5.jpg" width="240" height="450" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="font-size:60px; text-align:top; color: black;">Welcome <h1>
                                <h1 style="font-size:60px;color: black;">To</h1>
                                <h1 style="font-size:60px; color: black;">Training & Job</h1>
                                <b>
                                    <p style="font-size:20px;color: grey;">Introducing various jobs.Apply to premium
                                        fresher jobs for free</p>
                                </b>
                                <button type="button" class="btn btn-primary"><b>Top jobs</b></button>
                                <button type="button" class="btn btn-secondary"><b>Categories</b></button>
                                <button type="button" class="btn btn-success"><b>Something new</b></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="sli2.jpg" width="2400" height="450" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <b>
                        <h1>Online certified training</h1>
                    </b>
                    <b>
                        <p>More Skills = More Money. Enroll now</p>
                    </b>
                </div>
            </div>
            <div class="carousel-item">
                <img src="sli3.jpg" width="2400" height="450" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <b>
                        <h1>Stay safe indoor</h1>
                    </b>
                    <b>
                        <p>Learn from home.</p>
                    </b>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container my-3">
        <center>
            <h1 style="font-size:35px;"> Our Jobs, Courses and Forums</h1>
        </center>
        <br>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

            <form action="/halkat/job">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Fresher Jobs</h4>
                        </div>
                        <img src="img5.jpg" height="234px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" style="font-size:29px;">Premium fresher jobs on
                                your
                                fingertips</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Dream Companies</li>
                                <li>100% verified jobs</li>
                                <li>Phone and email support</li>
                                <li>Minimum CTC of 3 LPA...</li>
                            </ul>
                            <button type="submit" class="w-100 btn btn-lg btn-primary">Check Out</button>
                        </div>
                    </div>
                </div>
            </form>


            <form action="/halkat/course">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Top Courses</h4>
                        </div>
                        <img src="img2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" style="font-size:28px;">Learn new-age skills to
                                enhance your knowledge</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Programming With python</li>
                                <li>Web development</li>
                                <li>Digital marketing</li>
                                <li>Ethical Hacking & more..</li>
                            </ul>
                            <button type="submit" class="w-100 btn btn-lg btn-primary">Check Out</button>
                        </div>
                    </div>
                </div>
            </form>

            <form action="/halkat/ForumProject">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Lets Discuss</h4>
                        </div>
                        <img src="img3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" style="font-size:29px;">Lets discuss everything
                                here,post doubts</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Clear Your doubts</li>
                                <li>Learn from others mistakes</li>
                                <li>24 X 7</li>
                                <li>Help center access...</li>
                            </ul>
                            <button type="submit" class="w-100 btn btn-lg btn-primary">Check
                                Out</button>
                        </div>
                    </div>
                </div>
            </form>

            <hr>
        </div>
    </div>



    <?php include 'partials/_footer.php';?>

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