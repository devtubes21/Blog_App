<?php
    session_start();
?>
<?php include_once('inc/conn.php');?>
<?php

    if(isset($_GET['Post_Id'])){

        $Post_Id = $_GET['Post_Id'];
        $post_title = "";
        $post_body = "";
        $post_create = "";

        $query = "SELECT * FROM TBL_Post WHERE Id = {$Post_Id}";

        $ShowPost = mysqli_query($conn, $query);

            if($ShowPost){

                if(mysqli_num_rows($ShowPost) > 0){

                    $post = mysqli_fetch_assoc($ShowPost);

                    $post_title = $post['Post_Title'];
                    $post_body = $post['Post_Body'];
                    $post_create = $post['Create_at'];

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
    <link rel="stylesheet" href="css/sign_up.css">
    <title>Show Post</title>
</head>
<body>

    <?php include_once('inc/navbar.php')?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <div class="card mt-4">
                <div class="card-header">
                    <?php echo $post_title;?>
                </div>
                <div class="card-body">
                    <?php echo $post_body;?>
                </div>
                <div class="card-footer">
                    <small><?php echo $post_create;?></small>
                </div>
            </div>

            </div>
        </div>
    </div>

</body>
</html>