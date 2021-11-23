<?php
  session_start();
  $product_inCart = array();
  if (isset($_SESSION['cart'])) {
    $product_inCart = $_SESSION['cart'];
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sách sản phẩm trong giỏ hàng</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Thành tiền</th>
        <th>Ảnh sản phẩm</th>
        <th>remove</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($product_inCart as $key => $product) { ?>
        <tr>
          <td><?= $product['product_code'] ?> </td>
          <td><?= $product['product_name'] ?> </td>
          <td><a href="" class="btn btn-primary">+</a> <?= $product['product_amount'] ?> <a href="" class="btn btn-primary">-</a> </td>
          <td><?= number_format($product['product_price']) ?> </td>
          <td><?= number_format($product['product_price']*$product['product_amount']) ?> </td>
          <td> <img width="100px" height="100px" src="<?= $product['product_images'] ?>" alt=""> </td>
          </td>
          <td><a href="remove_product.php?id=<?= $key ?>" class="btn btn-primary">Xóa khỏi giỏ hàng</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <td> <a href="indext.php" class="btn btn-primary">Danh sách sản phẩm</a> </td>
</div>

</body>
</html>
