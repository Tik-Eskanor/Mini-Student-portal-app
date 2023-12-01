<?php require_once("../exe/autoloader.php");
   $Db = new Database();

   $student_obj  = new Student($Db);
   $_SESSION['student'] = $student_obj->student($_SESSION['STUDENT']);

//    $programme_obj = new Programme($Db);
//    $programmes = $programme_obj->get_programmes();

   $course_obj = new Course($Db);
   $course = $course_obj->get_course($_SESSION['student']['course']);

   $faculty_obj = new Faculty($Db);
   $faculty = $faculty_obj->get_faculty($course['faculty']);

   $programme_obj = new Programme($Db);
   $programme = $programme_obj->get_programme($_SESSION['student']['programme_type']);

   $fee_obj = new Fees($Db);

   $school_fees = $fee_obj->get_school_fees($_SESSION['student']['programme_type']);

   $other_fees = $fee_obj->get_other_fees();
   
   $payment_history = $fee_obj->get_payment_history($_SESSION['student']['id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../css/style.css">
    <title>Student Portal</title>
</head>
<body>
<header class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-4" href="#">Departmental Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item  ms-2">
              <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item dropdown  ms-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user"></i> Biodata
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="view_bio.php">View</a></li>
                    <li><a class="dropdown-item" href="update_bio.php">Update</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item fw-bold" href="change_password.php">Change Password</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown  ms-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-dollar-sign"></i> Fees Payment
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="school_fees.php">School Fees</a></li>
                    <li><a class="dropdown-item" href="acceptance_fee.php">Accpetance Fee</a></li>
                    <li><a class="dropdown-item" href="hostel_fee.php">Hostel Fee</a></li>
                    <li><a class="dropdown-item" href="other_fees.php">Other Fees</a></li>
                </ul>
            </li>
            <li class="nav-item  ms-2">
              <a class="nav-link" aria-current="page" href="payment_history.php"><i class="fas fa-clock"> </i> Payment History</a>
            </li>
            <li class="nav-item  ms-2">
              <a class="nav-link" aria-current="page" href="courses.php"><i class="fas fa-book-open"> </i> Courses</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link fw-bold fs-4 h1 ms-3 rounded" href="../exe/logout_student.php">Logout</a>
            </li>
        
        </ul>
        </div>
    </div>
    </nav>
</header>