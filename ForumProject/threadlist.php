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
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
</head>


<body>
    <?php include 'partials2/_header.php';?>
    <?php include 'partials2/_dbconnect.php';?>

    <?php
    
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories_table` WHERE Category_ID = $id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['Category_Name'];
        $catdesc = $row['Category_Desc'];
    }
    
    ?>

    <?php
    
    $method = $_SERVER['REQUEST_METHOD'];
    $showAlert = false;
    if($method=='POST'){
        $th_title = $_POST['title'];
        $th_thread = $_POST['desc'];
        $sno = $_POST['sno'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_thread', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn,$sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> You question has posted. Please wait for respond
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    
    ?>

    <div class="container my-4">
        <center>
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Welcome to <?php echo $catname?> Forums</h1>
                <p class="col-md-8 fs-4"><?php echo $catdesc?></p>
                <button class="btn btn-success btn-lg" type="button">Learn More</button>
            </div>

        </center>
    </div>

    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '
    <div class="container">
        <h1>Start a discussion</h1>
        <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Problem Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Keep your title as short and crisp as possible</div>
    </div>
    <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc"
            style="height: 100px"></textarea>
        <label for="floatingTextarea2">Elaborate your problem</label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Post</button>
    <br>
    </form>
    </div>';
    }
    else{
    echo '
    <div class="container">
        <h1>Start a discussion</h1>
        <p>Login to start discussion</p>
    </div>';
    }
    ?>

    <br><br>
    <div class="container" id="ques">
        <h1>Browse Questions</h1>
        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
        $result = mysqli_query($conn,$sql);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result)){
            $noResult = false;
            $thread_id = $row['thread_id'];
            $thread_title = $row['thread_title'];
            $thread_desc = $row['thread_desc'];
            $thread_user_id = $row['thread_user_id'];
            $sql2 = "SELECT fname FROM `users` WHERE Sno='$thread_user_id'";
            $result2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($result2);

        
        echo '<div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="userimg.jpg" height="50px" width="50px" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5 class="mt-0"><a class="text-dark" style="text-decoration: none;" href="threads.php?threadid='.$thread_id.'">'.$row2['fname'].'</a></h5>
                <p>'.$thread_title.'</p>
            </div>
        </div>';
}

if($noResult){
    echo '<br><br>';
    echo ' <h2 style="margin-left: 2px;"> <span class="badge rounded-pill bg-secondary">Be the first one to ask the question!</h2></span> 
    ';
}
?>




    </div>

    <?php include 'partials2/_footer.php';?>

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