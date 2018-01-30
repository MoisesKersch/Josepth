<?php
  $mysql = new mysqli("localhost", "root", "", "register");


  $firstname = isset($_GET['firstname'])?$_GET['firstname']:null;
  $lastname = isset($_GET['lastname'])?$_GET['lastname']:null;
  $birthdate = isset($_GET['birthdate'])?$_GET['birthdate']:null;
  $sex = isset($_GET['sex'])?$_GET['sex']:null;

  echo $birthdate;

  $mysql->query("insert into reg (firstname, lastname, birth, sex) value ('".$firstname."',
                                                                          '".$lastname."',
                                                                          '".$birthdate."',
                                                                          '".$sex."')");

  $data = $mysql->query("select * from reg");

  $print = $data->fetch_all(MYSQLI_ASSOC);
?>
