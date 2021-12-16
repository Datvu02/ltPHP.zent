<?php
  require_once 'Views/Partials/header.php';
 ?>
 <div class="card mb-4">
     <div class="card-header">
         <i class="fas fa-table me-1"></i>
         Post list
         <!-- <a href="category_add.php?" style="float: right" class="btn btn-success">Add content</a> -->
     </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>title</th>
                  <th>Description</th>
                  <th>Thumbnail</th>
                  <th>category_id</th>
                  <th>content</th>
                  <th>created_at</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $pst) { ?>
              <tr>
                  <td><?= $pst['id'] ?></td>
                  <td><?= $pst['title'] ?></td>
                  <td><?= $pst['description'] ?></td>
                  <td>
                      <img src="images/<?= $pst['thumbnail'] ?>" width="50px" height="50px" style="border-radius: 30%; object-fit: cover;">
                  </td>
                  <td><?= $pst['category_id'] ?></td>
                  <td><?= $pst['content'] ?></td>
                  <td><?= $pst['created_at'] ?></td>
                  <td>
                      <a href="posts_edit.php?id=<?= $pst['id'] ?>" class="btn btn-success">Edit</a>
                      <a href="posts_delete.php?id=<?= $pst['id'] ?>" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    require_once 'Views/Partials/footer.php';
?>
