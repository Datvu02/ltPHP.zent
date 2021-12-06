<?php

  class pupil
  {
    private  $name;
    private  $gender;
    private  $DOB;
    private  $village;

    function set_pupil($name,$gender,$DOB,$village)
    {
      $this -> name = $name;
      $this -> gender = $gender;
      $this -> DOB = $DOB;
      $this -> village = $village;
    }
    function get_name()
    {
      return $this -> name;
    }
    function get_gender()
    {
      return $this -> gender;
    }
    function get_DOB()
    {
      return $this -> DOB;
    }
    function get_village()
    {
      return $this -> village;
    }
    function __construct()
    {
      echo "Thông tin sinh viên là:<br>";
    }
  }
  $pupil = new pupil();
  $pupil -> set_pupil('Đạt','Nam','../../....','Ninh Bình');
  echo "Họ Tên: ".$pupil->get_name()."<br>";
  echo "Giới tính: ".$pupil->get_gender()."<br>";
  echo "Ngày sinh: ".$pupil->get_DOB()."<br>";
  echo "Quê quán: ".$pupil->get_village()."<br>";
 ?>
