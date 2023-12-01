<?php
require_once('autoloader.php');
$Db = new Database();

if(isset($_POST['submit']))
{

  $id = $_POST['id'];
  $current = $_POST['current'];
  $new = $_POST['new'];


  $student_obj = new Student($Db);
  $update_password = $student_obj->update_password($id,$current,$new);
  if($update_password)
  {
      $_SESSION['message'] = "Student Password updated";
      header("location:../Dashboard/view_bio.php");
  }
  else
  {
    $_SESSION['message'] = "Unable to update student password. Please try again later";
    header("location:../Dashboard/update_password.php.php");
  }
}