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
        <th>remove</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($product_inCart as $key => $product) { ?>
        <tr>
          <td><?= $key ?> </td>
          <td><?= $product['name'] ?> </td>
          <td><a href="add_tocart.php?id=<?= $key ?>" class="btn btn-primary">+</a> <?= $product['gia'] ?> <a href="remove.php?id=<?= $key ?>" class="btn btn-primary">-</a> </td>
          <td><?= number_format($product['gia']) ?> </td>
          <td><?= number_format($product['gia']*$product['soluong']) ?> </td>
          <td><a href="remove_product.php?id=<?= $key ?>" class="btn btn-primary">Xóa khỏi giỏ hàng</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <td> <a href="indext.php" class="btn btn-primary">Danh sách sản phẩm</a> </td>
</div>

</body>
</html>
