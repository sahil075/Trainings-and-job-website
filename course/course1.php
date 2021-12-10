<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />

    <title>codewithmixxz-course</title>
    <style>
    /* body{
            background-color: black;
        } */
    p {
        color: white;
    }

    h1 {
        color: white;
    }

    body {
        background-color: #3e66a1;
    }

    .container2 {
        border: 2px solid black
    }

    .container1 {
        border: 2px solid white;
        width: 100%;
    }

    #ques {
        min-height: 433px;
    }

    .conatiner {
        position: absolute;
    }
    </style>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/halkat" style="color: white;">Train-Job</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/halkat" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Programming</a></li>
                            <li><a class="dropdown-item" href="#">Business and management</a></li>
                            <li><a class="dropdown-item" href="#">Data science</a></li>
                            <li><a class="dropdown-item" href="#">Core engineering</a></li>
                            <li><a class="dropdown-item" href="#">Design</a></li>
                        </ul>
                    </li>


                    <div class="collapse navbar-collapse" id="navmenu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="#learn" class="nav-link" style="color: white">How You'll Learn</a>
                            </li>
                            <li class="nav-item">
                                <a href="#syllabus" class="nav-link" style="color: white">Syllabus</a>
                            </li>
                            <li class="nav-item">
                                <a href="#instructors" class="nav-link" style="color: white">Instructors</a>
                            </li>
                        </ul>
                    </div>

                </ul>
            </div>
        </div>
    </nav> -->

    <?php include 'partials2/_newheader.php';?>


    <div class="container2 bg-dark">
        <div class="px-4 py-5 my-5 text-center">
            <!-- <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="display-5 fw-bold ">Web development</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Learn HTML/CSS, MySQL, PHP, JavaScript, and React and build a website from scratch!
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-light btn-lg disabled" role="button" aria-disabled="true">Rating: 4.1</a>
                    <a class="btn btn-light btn-lg disabled" role="button" aria-disabled="true">5,120 students</a>
                    <a class="btn btn-light btn-lg disabled" role="button" aria-disabled="true">6 weeks</a>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <center>
        <h1> <b>Training Highlights</b> </h1>
    </center>

    <div class="container1 bg-light" id="ques">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 270px">
                        <h3>Learn from home</h3>
                        <p>Stay safe indoors</P>
                    </span>
                </div>
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 290px">
                        <h3>Certificate of Training</h3>
                        <p>Stay safe indoors</P>
                    </span>
                </div>
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 290px">
                        <h3>Placement assistance</h3>
                        <p>To build your career</P>
                    </span>
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 290px">
                        <h3>138 video tutorials</h3>
                        <p>Learn anytime, anywhere</P>
                    </span>
                </div>
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 290px">
                        <h3>Build 1 project</h3>
                        <p>For hands-on practice</P>
                    </span>
                </div>
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 290px">
                        <h3>Doubt clearing</h3>
                        <p>Through Q&A forum</P>
                    </span>
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 290px">
                        <h3>Beginner friendly</h3>
                        <p>No prior knowledge required</P>
                    </span>
                </div>
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 290px">
                        <h3>8 weeks access</h3>
                        <p>To the platform</P>
                    </span>
                </div>
                <div class="col-sm">
                    <span class="badge bg-secondary" style="height: 70px; width: 300px">
                        <h3>Downloadable content</h3>
                        <p>With lifetime access</P>
                    </span>
                </div>
            </div>
        </div>

        <br><br>

        <section class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="img/fundamentals.svg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md p-7">
                        <h1 style="color: black;"><b> Why learn web development</b></h1>
                        <br>
                        <h3> Build awesome websites </h3>
                        Mark Zuckerberg built Facebook. Sachin Bansal built Flipkart. What will you build?
                        <br><br>
                        <h3> Be in demand </h3>
                        With 1.7 billion websites on the internet, it is one of the hottest career options with an
                        average fresher salary of 6 LPA for full stack developers according to Glassdoor.
                        <br><br>
                        <h3> Eat-Sleep-Code-Repeat </h3>
                        Be it rain or sunshine, coding is always on your mind.
                    </div>
                </div>
            </div>
        </section>

        <br><br>

        <section class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <h1 style="color: black;"><b>What placement assistance will you receive?</b></h1>
                        <br>
                        <h3>Free Placement Prep Training</h3>
                        Learn how to build your resume, make great applications, and ace your interviews.
                        <br><br>
                        <h3>Curated internships & jobs</h3>
                        Get internships and fresher jobs as per your preference in your inbox.
                        <br><br>
                        <h3>Get highlighted on Internshala</h3>
                        Top performers will be highlighted in their job applications on our website.
                    </div>
                    <div class="col-md p-7">
                        <img src="img/CourseRandom.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>


        <br><br>

        <center>
            <h1 style="color: black;" id="learn">How will your training work</h1>
        </center>
        <br>
        <div class="container" style="border: 2px white">
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 16rem; height: 15rem;">
                        <center>
                            <img src="img/c1.png" style="width: 100px; border: 1px solid black;">
                        </center>
                        <div class="card-body">
                            <h4 class="card-title">Learn concepts</h4>
                            Go through training videos to learn concepts
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 16rem; height: 15rem;">
                        <center>
                            <img src="img/c2.png" style="width: 100px; border: 1px solid black;">
                        </center>
                        <div class="card-body">
                            <h4 class="card-title">Test yourself</h4>
                            Test your knowledge through quizzes & module tests at regular intervals
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 16rem; height: 15rem;">
                        <center>
                            <img src="img/c3.png" style="width: 100px; border: 1px solid black;">
                        </center>
                        <div class="card-body">
                            <h4 class="card-title">Hands-on practice</h4>
                            Work on assignments and projects. Use our in-browser IDE for coding practice
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 16rem; height: 15rem;">
                        <center>
                            <img src="img/c4.png" style="width: 100px; border: 1px solid black;">
                        </center>
                        <div class="card-body">
                            <h4 class="card-title">1:1 doubt solving</h4>
                            Get your doubts solved by experts through Q&A forum within 24 hours
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 16rem; height: 15rem;">
                        <center>
                            <img src="img/c5.png" style="width: 100px; border: 1px solid black;">
                        </center>
                        <div class="card-body">
                            <h4 class="card-title">Take final exam</h4>
                            Complete your training by taking the final exam
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 16rem; height: 15rem;">
                        <center>
                            <img src="img/c6.png" style="width: 100px; border: 1px solid black;">
                        </center>
                        <div class="card-body">
                            <h4 class="card-title">Get certified</h4>
                            Get certified in Web Development upon successful completion of training
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>

        <br><br>

        <center>
            <h1 style="color: black;" id="syllabus">Training syllabus</h1>
        </center>

        <br>

        <div class="container">
            <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h3>HTML</h3>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <p style="color: black; font-size: larger;">About the Training</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Basic Concepts of Web Development</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Setting Up Local Environment</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Introduction to HTML</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">HTML Tags</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Lists, Tables, and Forms</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3>CSS</h3>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <p style="color: black; font-size: larger;">CSS Selectors</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Unit: Length and Color</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">CSS Properties</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Box Model</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Inspect Element</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Display</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Position</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Structuring a Web Page</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Flexbox</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Media Queries</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h3>Bootstrap</h3>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <p style="color: black; font-size: larger;">Introduction to Bootstrap</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Layout</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Other Components</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h3>DBMS</h3>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <p style="color: black; font-size: larger;">Introduction to DBMS</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Basic Concepts and Terminologies</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">SQL Queries - Database Related</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">SQL Queries - Tables Related</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">SQL Queries - Records Related</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Designing a Database</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h3>PHP</h3>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <p style="color: black; font-size: larger;">PHP: Introduction and Installation</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Variables and Operators</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Conditional Statements</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Loops</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Arrays</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Strings</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Functions</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Form Submission</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Database Communication</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Cookies and Sessions</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <h3>JS</h3>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <p style="color: black; font-size: larger;">Introduction to Javascript</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Variables and Operators</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Conditional Statements and Loops</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Functions</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Objects and Classes</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Arrays</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Strings</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">JavaScript as a Client Side Language</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Debugging JS Using Inspect Element</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">AJAX</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <h3>React</h3>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <p style="color: black; font-size: larger;">Introduction to React</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Creating an Element</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">JSX</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Components</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Props</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">States</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Managing States and Data Flow</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Create React App</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Breaking Into Modules</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">Deploy</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <h3>Final Project</h3>
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <p style="color: black; font-size: larger;">Building PG-Life Project</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">PG-Life: Setting up DBMS</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">PG-Life: Using PHP</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">PG-Life: Using JS and AJAX</p>
                                </li>
                                <li>
                                    <p style="color: black; font-size: larger;">PG-Life: Using React</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <br><br>








        <section id="instructors" class="p-5 bg-primary">
            <div class="container">
                <h2 class="text-center text-white">Our Instructors</h2>
                <p class="lead text-center text-white mb-5">
                    Our instructors all have 5+ years working in the
                    industry
                </p>

                <div class="row g-4">

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light" style="height: 420px;">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3"
                                    alt="" />
                                <h3 class="card-title mb-3">Saravanavel</h3>
                                10+ years of experience building back-end solutions for reputed organizations like IBM
                                and Internshala.<br>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3"
                                    alt="" />
                                <h3 class="card-title mb-3">Sara john</h3>
                                5+ years of experience including in the EdTech industry as a learning experience
                                designer.
                                Has worked as an assistant professor and published several scientific papers.<br>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </section>

        <div class="card text-center mb-0">
            <div class="card-header bg-dark text-light">
                Copyright Train->Job 2021 | All rights reserved</div>
        </div>




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