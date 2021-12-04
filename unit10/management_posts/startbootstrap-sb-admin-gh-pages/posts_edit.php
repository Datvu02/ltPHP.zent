<?php
  require_once 'connection.php';

  $id = (isset($_GET['id'])?$_GET['id']:0);

  $sql = 'SELECT * FROM `posts` WHERE id = '.$id;

  $posts = $conn -> query($sql) -> fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Submit a list of beautiful photos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Submit a list of beautiful photos</h3>
    <h3 align="center">Update posts</h3>
    <hr>
        <form action="posts_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="hidden" name="id" value="<?= $posts['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $posts['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $posts['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $posts['content'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
