<?php
require_once('autoloader.php');
$Db = new Database();

if(isset($_POST['submit']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $oname = $_POST['oname'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $lga = $_POST['lga'];
  $state = $_POST['state'];
  $pt = $_POST['pt'];
  $p = $_POST['p'];
  $course = $_POST['course'];
  $kname = $_POST['kname'];
  $kaddress = $_POST['kaddress'];
  $kphone = $_POST['kphone'];
  $bg = $_POST['bg'];
  $gt = $_POST['gt'];
  $challenges = $_POST['challenges'];

  $student_obj = new Student($Db,$fname,$lname,$oname,$email,$pwd,$address,$phone,$gender,$dob,$lga,$state,$pt,$p,$course,$kname,$kaddress,$kphone,$bg,$gt,$challenges);
  $new_student = $student_obj->create();
  if($new_student)
  {
      $_SESSION['message'] = "Account created successfully. Kindly login now";
      header("location:../login_form.php");
  }
  else
  {
    $_SESSION['message'] = "Unable to enroll you at the moment. Please try again later";
    header("location:../application_form.php");
  }
}