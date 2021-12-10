<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Lets-Discuss</title>
</head>

<body>
    <?php include 'partials/_header.php';?>

    <?php
    
    // if($showAlert1){
    // echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //         <strong>Done!</strong> You details recorded successfully.
    //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //     </div>';
    // }

    ?>

    <div class="container my-0">
        <br>
        <h1>Contact us!</h1>
        <form action="/halkat/contact_handle.php" method="post">
            <br>
            <div class="mb-3">
                <label for="name" class="form-label">Your name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                    placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Your phone number</label>
                <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="emailHelp"
                    placeholder="Enter your phone number">
            </div>
            <div class="mb-3">
                <label for="desc1" class="form-label">Describe why you want to contact us</label>
                <textarea class="form-control" id="desc1" name="desc1" placeholder="Your message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </form>
    </div>
    <br>
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