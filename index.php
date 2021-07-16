<?php
    session_start();
?>
<?php include_once('inc/conn.php');?>
<?php

    $postbody = "";

    $query = "SELECT * FROM TBL_Post";

    $ShowPost = mysqli_query($conn, $query);

    if($ShowPost){

        if(mysqli_num_rows($ShowPost) > 0){

            while($post = mysqli_fetch_assoc($ShowPost)){

                $postbody .= "<a id='Post_link' href='ShowPost.php?Post_Id={$post['Id']}'>";

                    $postbody .= "<div id='main_div'>";

                        $postbody .= "<h1 id='title'>";
                            $postbody .= "{$post['Post_Title']}";
                        $postbody .= "</h1>";

                        $postbody .= "<div id='body'>";
                            $postbody .= "{$post['Post_Srt_Nt']}";
                        $postbody .= "</div>";

                        $postbody .= "<div id='body'>";
                            $postbody .= "<small>";
                                $postbody .= "Created at {$post['Create_at']}";
                            $postbody .= "</small>";
                        $postbody .= "</div>";

                    $postbody .= "</div>";

                $postbody .= "</a>";
                

            }

        }

    }

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
    <style>

        #Post_link{
            text-decoration: none;
        }

        #main_div{

            border: 1px solid #fff;
            margin-bottom: 10px;
            padding: 10px;
            color: #fff;

        }

    </style>
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <?php echo $postbody?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>