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

    <br>
    <center>
        <h1 style="color: purple;">Build - Resume</h1>
    </center>
    <form action="/halkat/job/BuildResume_handle.php" method="post">
        <div class="container">
            <br>
            <!-- <h2>Username: </h2> -->
            <div class="input-group">
                <span class="input-group-text">
                    <h4>First name : </h4>
                </span>
                <input type="text" id="fname" name="fname" aria-label="fname" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>phone : </h4>
                </span>
                <input type="phone" id="phone" name="phone" aria-label="phone" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Email : </h4>
                </span>
                <input type="email" id="email" name="email" aria-label="email" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Location : </h4>
                </span>
                <input type="text" id="location" name="location" aria-label="location" class="form-control">
            </div>
            <br>
            <hr>
            <br>
            <h4>Education: </h4>
            <select id="education" name="education" class="form-select form-select-sm" aria-label="education">
                <option selected>select course</option>
                <option value="Bachelor of engineering">Bachelor of engineering</option>
                <option value="Bachelor of technology">Bachelor of technology</option>
                <option value="Bachelor of commerce">Bachelor of commerce</option>
            </select>
            <br>
            <hr>
            <br>
            <h3>Jobs: </h3>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Job 1 </h4>
                </span>
                <textarea id="job1" name="job1" class="form-control" aria-label="job1"></textarea>
            </div>
            <br>
            <hr>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Job 2 </h4>
                </span>
                <textarea id="job2" name="job2" class="form-control" aria-label="job2"></textarea>
            </div>
            <br>
            <hr>
            <h3>Internships: </h3>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Internship 1 : </h4>
                </span>
                <textarea id="internship1" name="internship1" class="form-control" aria-label="internship1"></textarea>
            </div>
            <br>
            <hr>

            <div class="input-group">
                <span class="input-group-text">
                    <h4>Internship 2 : </h4>
                </span>
                <textarea id="internship2" name="internship2" class="form-control" aria-label="internship2"></textarea>
            </div>

            <br>
            <hr>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Academics/Personal projects : </h4>
                </span>
                <textarea id="academic" name="academic" class="form-control" aria-label="academic"></textarea>
            </div>
            <br>
            <hr>
            <br>
            <h3>Skills: </h3>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Skill 1: </h4>
                </span>
                <textarea id="skills1" name="skills1" class="form-control" aria-label="skills1"></textarea>
            </div>
            <br>
            <hr>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Skill 2: </h4>
                </span>
                <textarea id="skills2" name="skills2" class="form-control" aria-label="skills2"></textarea>
            </div>
            <br>
            <hr>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Skill 3: </h4>
                </span>
                <textarea id="skills3" name="skills3" class="form-control" aria-label="skills3"></textarea>
            </div>
            <br>
            <hr>
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Skill 4: </h4>
                </span>
                <textarea id="skills4" name="skills4" class="form-control" aria-label="skills4"></textarea>
            </div>
            <br>
            <hr>
            <!-- <h4>Portfolio/Work samples : </h4> -->
            <div class="input-group">
                <span class="input-group-text">
                    <h4>Portfolio/work samples : </h4>
                </span>
                <textarea id="portfolio" name="portfolio" class="form-control" aria-label="portfolio"></textarea>
            </div>
            <br>
            <hr>
            <center>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </center>
            <br>
        </div>
    </form>
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