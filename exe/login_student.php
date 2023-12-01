<?php
require_once('autoloader.php');
$Db = new Database();

if(isset($_POST['submit']))
{
  $email= $_POST['email'];
  $pwd = $_POST['pwd'];

  $student_obj = new Student($Db);
  $login = $student_obj->login($email,$pwd);
}