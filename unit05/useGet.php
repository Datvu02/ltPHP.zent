<?php
  echo "<pre>";
    print_r($_GET);
  echo "</pre>";

  if (isset($_GET['course'])) {
    $course = $_GET['course'];
    echo "Khóa học ".$course;
  }
?>
