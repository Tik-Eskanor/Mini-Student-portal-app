<?php
require_once('autoloader.php');
$Db = new Database();

if(isset($_POST['submit']))
{

  $id = $_POST['id'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $kaddress = $_POST['kaddress'];
  $bg = $_POST['bg'];
  $gt = $_POST['gt'];
  $challenges = $_POST['challenges'];

  $student_obj = new Student($Db);
  $update_student = $student_obj->update_bio($id,$address,$phone,$kaddress,$bg,$gt,$challenges);
  if($update_student)
  {
      $_SESSION['message'] = "Student bio updated";
      header("location:../Dashboard/view_bio.php");
  }
  else
  {
    $_SESSION['message'] = "Unable to update student bio. Please try again later";
    header("location:../Dashboard/update_bio.php.php");
  }
}