<?php
require_once 'Models/Post.php';
  class PostController
  {
    public function index()
    {
      // echo "CategoryController-index";
      $Post = new Post();
      $posts = $Post -> getlist();
      require_once 'Views/Posts/posts_list.php';
    }
  }
 ?>
