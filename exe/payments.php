<?php
require_once('autoloader.php');
$Db = new Database();

if(isset($_POST['submit']))
{

  $sid = $_POST['sid'];
  $type = $_POST['type'];
  $amount = $_POST['amount'];


  $fee_obj = new Fees($Db);
  $pay = $fee_obj->payment($sid,$type,$amount);
  if($pay)
  {
      $_SESSION['message'] = "PAYMENT SUCCESSFUL";
      header("location:".$_SERVER['HTTP_REFERER']);
  }
  else
  {
    $_SESSION['message'] = "PAYMENT NOT SUCCESSFUL";
    header("location:".$_SERVER['HTTP_REFERER']);
  }
}