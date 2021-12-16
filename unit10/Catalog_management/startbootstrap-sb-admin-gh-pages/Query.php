<?php
  require_once 'Connection1.php';

  class Query
  {
    private $conn;

    public function __construct()
    {
      $connection = new Connection();
      // $connection -> password = "";
      $this -> conn = $connection -> connect();
    }
    public function select($table, $columns = '*')
    {
      echo "Select";
    }
  }
 ?>
