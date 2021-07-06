<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Plugin/bootstrap.min.css">
    <script src="Plugin/jquery.min.js"></script>
    <script src="Plugin/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Blog App</title>
</head>
<body>

    <?php include_once('inc/navbar.php')?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron mt-4">
                    <h4 id="jumbo-header">Welcome to the DevTubes</h4>
                    <h4 id="jumbo-emoji">👾👨‍💻👾</h4>
                </div>
            </div>
        </div>
    </div>

</body>
</html>