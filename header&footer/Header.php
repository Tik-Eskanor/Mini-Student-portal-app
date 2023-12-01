<?php require_once("exe/autoloader.php");
   $Db = new Database();
   $programme_obj = new Programme($Db);
   $programmes = $programme_obj->get_programmes();

//    $faculty_obj = new Faculty($Db);
//    $faculties = $faculty_obj->get_faculties();

   $course_obj = new Course($Db);
   $courses = $course_obj->get_courses();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/style.css">
    <title>Student Portal</title>
</head>
<body>
<header class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-4" href="#">Admission Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="requirements.php">Admission Requirements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="programes.php">Programmes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link fw-bold fs-4 h1 ms-3 rounded" href="login_form.php">Login</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>
