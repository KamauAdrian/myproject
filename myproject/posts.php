<?php
$title=$post="";
$post_Err="";
if (isset($_POST['btnp'])){
if (empty($_POST['title']) && empty($_POST['post'])){
    $post_Err="Add something to post";

}else{
    $title=$_POST['title'];
    $post=$_POST['post'];

    $conn=mysqli_connect('localhost','root','','webchall');
 $result=mysqli_query($conn,"INSERT INTO posts VALUES('','$title','$post')");
    if ($result== true){
        header('location:dashboard.php');
    }else{
        $post_Err="An error occurred";
    }
}
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/customs.css">
</head>
<body>
<div class="cont1">
    <div class="container-fluid">
        <h3 class="cent">Start a blog</h3>
        <form action="" method="post">
            <div class="form-group row">
                <label for="title">BLOG POST </label>
                <input type="text" name="title" class="inp1" id="title" placeholder="Post Title">
            </div>
            <div class="form-group row">
                <input type="text" name="post" class="inp2" placeholder="Post">
            </div>
            <div class="form-group row">
               <span class="error"><?php echo $post_Err;?></span>
                <input type="submit" name="btnp" value="POST" class="btn btn-info btn1">
            </div>
        </form>
    </div>
<!--        <div class="row">-->
<!--            <div class="col-sm-3">-->
<!--                <label for="post_title">Blog Post</label>-->
<!--            </div>-->
<!--            <div class="col-sm-9">-->
<!--                <input type="text" name="title" id="post_title" class="inp1 form-control" placeholder="Post Title">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-sm-3">-->
<!--                <h2>Post</h2>-->
<!--            </div>-->
<!--            <div class="col-sm-9">-->
<!--                <textarea name="post_content" class="inp2" placeholder="post"></textarea>-->
<!--            </div>-->
<!---->
<!--            <input type="submit" value="Post">-->
<!--        </div>-->
<!--    </div>-->
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
