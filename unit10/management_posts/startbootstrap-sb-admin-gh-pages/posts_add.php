<?php
  require_once 'connection.php';

  $sql = 'SELECT * FROM posts';
  $result = $conn -> query($sql);

  $posts = array();
  while ($row = $result -> fetch_assoc()) {
    $posts[] = $row;
  }


  $sql2 = 'SELECT * FROM categories';
  $result = $conn -> query($sql2);

  $categories = array();
  while ($row = $result -> fetch_assoc()) {
    $categories[] = $row;
  }
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
    <h3 align="center">Add New posts</h3>
    <hr>
        <form action="posts_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnall">
              
            </div>
            <div class="form-group">
                <label for="">category_id</label>
                <select class="" id="cars" name="category_id" form="from-control">
                  <?php foreach ($categories as $value) { ?>
                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content">
            </div>
            <div class="form-group">
                <label for="">Created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>
