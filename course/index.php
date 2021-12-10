<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Trainings and jobs</title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'partials2/_header.php';?>
    <?php include 'partials2/_dbconnect.php';?>

    <!-- Showcase -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Why<span class="text-warning"> Choose Us </span></h1>
                    <p class="lead my-4">
                        We focus on teaching our students the fundamentals of the latest
                        and greatest technologies to prepare them for their first dev role
                    </p>
                    <!-- <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">
                        Start The Enrollment
                    </button> -->
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/showcase.svg" alt="" />
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <!-- <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter Email" />
                    <button class="btn btn-dark btn-lg" type="button">Confirm</button>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card" style="width: 17rem; height: 24rem;">
                        <img class="card-img-top" src="img/image2jpg.jpeg" style="height: 170px; width: 270px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Learn how to create website from scratch</p>
                            <br>
                            <a href="course1.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 17rem; height: 24rem;">
                        <img class="card-img-top" src="img/image3.jpeg" style="height: 170px; width: 270px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Android App Development</h5>
                            <p class="card-text">Build your own food ordering app</p>
                            <a href="course2.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 17rem; height: 24rem;">
                        <img class="card-img-top" src="img/image10.jpeg" style="height: 170px; width: 270px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Programming With Python</h5>
                            <p class="card-text">Build a fantasy cricket game using python language</p>
                            <a href="course3.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card" style="width: 17rem; height: 24rem;">
                        <img class="card-img-top" src="img/image11.jpg" style="height: 170px; width: 270px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text">Learn SEO, Search Engine Marketing, Web Analytics and more</p>
                            <a href="course4.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem; height: 24rem;">
                        <img class="card-img-top" src="img/AdvancedExcel.jpg" style="height: 170px; width: 280px;"  alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Advanced Excel</h5>
                            <p class="card-text">Learn how to use advanced excel from scratch</p>
                            <br>
                            <a href="course5.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 17rem; height: 24rem;">
                        <img class="card-img-top" src="img/SqlDataAnalytics.jpg" style="height: 170px; width: 280px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">SQL for Data Analytics</h5>
                            <p class="card-text">Learn different data operations, joins, subqueries, and other functions</p>
                            <a href="course6.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card" style="width: 18rem; height: 22rem;">
                        <img class="card-img-top" src="img/MachineLearning.jpg" style="height: 170px; width: 280px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Machine Learning</h5>
                            <p class="card-text">Laern machine learning from scratch and take the first step towards AI</p>
                            <a href="course7.php" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem; height: 22rem;">
                        <img class="card-img-top" src="img/DeepLearning.jpg" style="height: 170px; width: 280px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Deep Learning</h5>
                            <p class="card-text">Learn the ABCs of Data science</p>
                            <br><br>
                            <a href="course8.php" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem; height: 22rem;">
                        <img class="card-img-top" src="img/image8.jpg" style="height: 170px; width: 280px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">AutoCAD</h5>
                            <p class="card-text">Learn to build 2D drafts and 3D models in AutoCAD</p>
                            <br>
                            <a href="course9.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card" style="width: 18rem; height: 22rem;">
                        <img class="card-img-top" src="img/Autocad3D.jpg" style="height: 170px; width: 280px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">AutoCAD 3D</h5>
                            <p class="card-text">Master the art of 3D modelling in AutoCAD!</p>
                            <br>
                            <a href="course10.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem; height: 22rem;">
                        <img class="card-img-top" src="img/GraphicDesign.jpg" style="height: 170px; width: 280px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Graphic Design</h5>
                            <p class="card-text">Design stunning graphics using Adobe photoshop</p>
                            <br>
                            <a href="course11.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 18rem; height: 22rem;">
                        <img class="card-img-top" src="img/Uiux.jpg" style="height: 170px; width: 280px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">UI/UX design</h5>
                            <p class="card-text">Master typography, color, wireframing, and more to become a pro UI/UX designer</p>
                            <a href="course12.php" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section id="learn" class="p-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>Our Vision</h2>
                    <p class="lead">
                        we're relentlessly pursuing our vision of a world where every learner can access education to unlock their potential, without the barriers of cost or location.
                    </p>
                    
                    
                </div>
                <div class="col-md">
                    <img src="img/react.svg" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- Question Accordion -->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="questions">
                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-one">
                            Where exactly are you located?
                        </button>
                    </h2>
                    <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            You can visit our contact page to know more about us.
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-two">
                            How much does it cost to attend?
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            We bring to you courses at very reasonable amount.
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-three">
                            What do I need to Know?
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Even if you dont know the fundementals our courses are designed in a way that will help you learn from scratch.
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-four">
                            How Do I sign up?
                        </button>
                    </h2>
                    <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            You can either visit our home page or start Enrollment right here.
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-five">
                            Do you help me find a job?
                        </button>
                    </h2>
                    <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            case 1:If you have a degree or certification you can apply from our freshers jobs page.
                            case 2:You can do a certification course from us and then you can use it to apply wherever you wish . 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

 

    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2021 Trainings and jobs</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrollLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Fill out this form and we will get back to you</p>
                    <form>
                        <div class="mb-3">
                            <label for="first-name" class="col-form-label">
                                First Name:
                            </label>
                            <input type="text" class="form-control" id="first-name" />
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last-name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Phone:</label>
                            <input type="tel" class="form-control" id="phone" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-71.060982, 42.35725],
            zoom: 18,
        })
    </script>
</body>

</html>
