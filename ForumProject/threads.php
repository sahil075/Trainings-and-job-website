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
    
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id = $id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $thread_title = $row['thread_title'];
        $thread_desc = $row['thread_desc'];
    }
    
    ?>


    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        $comment = $_POST['comment'];
        $sno = $_POST['sno'];
        $sql = "INSERT INTO `comment` (`comment_by`, `comment_content`, `thread_id`, `comment_time`) VALUES ('$sno', '$comment', '$id', current_timestamp())";
        $result = mysqli_query($conn,$sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Thank you! </strong>You comment has posted.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    
    ?>


    <div class="container my-2">
        <center>
            <div class="container-fluid py-4">
                <div class="col-md-9">
                    <div class="h-100 p-5 text-light bg-dark rounded-3">
                        <h2><?php echo $thread_title?></h2>
                        <p><?php echo $thread_desc?></p>
                        <hr>
                        <p>This is peer-to-peer forum. No spam/Advertising/self-promote in the forum is not allowed. Do
                            not post copyright-infringing material. Do not post offensive/posts/links or images. Remain
                            respectful to other members at all time</p>
                    </div>

                </div>
            </div>

        </center>
    </div>

    <div class="container" id="ques">

    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo'
        <div class="container">
            <h1>Post a comment</h1>
            <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Type your comment</label>
                    <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Post comment</button>
                <br>
            </form>
        </div>';
    }
    else{
        echo '
    <div class="container">
        <h1>Post a comment</h1>
        <p>Login to post a comment</p>
    </div>';
    }

    ?>    
        <br><br>

        <div class="container" id="ques">
            <h1>Discussion</h1>
            <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comment` WHERE thread_id=$id";
        $result = mysqli_query($conn,$sql);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result)){
            $comment_id = $row['comment_id'];
            $comment_content = $row['comment_content'];
            $comment_by = $row['comment_by'];
            $sql2 = "SELECT fname FROM `users` WHERE Sno='$comment_by'";
            $result2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $noResult = false;
        
        echo '<div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="userimg.jpg" height="50px" width="50px" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <p class="font-weight-bold my-0"><b>'.$row2['fname'].'</b></p>
                <p>'.$comment_content.'</p>
            </div>
        </div>';
}

    if($noResult){
        echo '<br><br>';
        echo ' <h2 style="margin-left: 2px;"> <span class="badge rounded-pill bg-secondary">Be the first one to post the comment!</h2></span> 
        ';
    }
?>
        </div>

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