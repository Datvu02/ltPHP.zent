
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="login_add.php" method="POST" role="form">
          <br>
            <legend>Thông tin sinh viên</legend>
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" class="form-control" placeholder=" Nhập họ và tên..." name="name">
            </div>
            <div class="form-group">
                <label for="">Giới tính : </label>
                <input type="radio" name="gender">Nam
                <input type="radio" name="gender">Nữ
                <input type="radio" name="gender">Khác
            </div>
            <div class="form-group">
                <label for="">Ngày tháng năm sinh: </label>
                <input type="text" class="form-control" placeholder="..../..../....." name="DOB">
            </div>
            <div class="form-group">
                <label for="">Quê Quán</label>
                <input type="text" class="form-control" name="home_town">
            </div>
            <div class="form-group">
                <label for="">Thông tin thêm: </label>
                <textarea name="information" class="form-control" rows="8" cols="80"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin.</button>
        </form>
    </div>
</body>
</html>
