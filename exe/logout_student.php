<?php
require_once('autoloader.php');
unset($_SESSION['student']);
session_destroy();
header("location:../login_form.php");