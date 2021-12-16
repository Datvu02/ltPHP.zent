<?php
  require_once 'Query.php';
  /**
   *
   */
  class Category extends Query
  {
    public $table = 'categories';

    public function getList()
    {
      echo "Get list    ";
      $categories = $this -> select($this -> table, ['id', 'name', 'description', 'thumbnail']);
    }
  }

  ?>
