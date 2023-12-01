<?php require_once('Header&Footer/Header.php');
?>

<main>
    <div class="container">
        <h2 class="mt-4">
        <?php if(isset($_SESSION['welcome'])){echo $_SESSION['welcome']; unset($_SESSION['welcome']);} ?>
        <?=$_SESSION['student']['lastname']." ".$_SESSION['student']['firstname']." ".$_SESSION['student']['othername'] ?>
        </h2>
        <div class="bg-dark text-light d-inline-block px-3 rounded py-2">
            <small class="fw-bold">Matric No</small>
            <h4><?= $_SESSION['student']['matric_no']?></h4>
        </div>
        <div class="card mt-3">
            <div class="card-body">
            <h4 class="card-title">Welcome to your personal online portal</h4> 
            <p>Use the menu at the top to access your personalized section</p>
            </div>
            
            <div class="card-header">
                <span class="fw-bold">Biodata Details</span>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="fw-bold">Faculty: </span><?= $faculty['name']?></li>
                <li class="list-group-item"><span class="fw-bold">Course: </span><?= $course['name']?></li>
                <li class="list-group-item"><span class="fw-bold">Programme Type: </span><?= $programme['name']?></li>
                <li class="list-group-item"><span class="fw-bold">State: </span><?=$_SESSION['student']['state']." State";?></li>
                <li class="list-group-item"><span class="fw-bold">Programme: </span><?=$_SESSION['student']['programme'];?></li>
                <li class="list-group-item"><span class="fw-bold">Level: </span><?= $_SESSION['student']['programme'] == 'NATIONAL DIPLOMA' ? 'ND1':'HHN1';?></li>
                <li class="list-group-item"><span class="fw-bold">Session: </span><?=$_SESSION['student']['date']."/".$_SESSION['student']['date']+1;?></li>
            </ul>
        </div>
        <div class="fees d-flex flex-wrap my-5">
           <div class="school-fees mb-3 text-light py-3 px-5 navy rounded text-left">
               <h5>School fees</h5>
               <h3 class="m-0"><img src="images/naira.png" width="70px"> </i> 30,000</h3>
               <?php
                $payments = $fee_obj->get_payments($_SESSION['student']['id'],"school");
                if(in_array("school",$payments))
                {
                ?>
                <small class="text-light fw-bold">Paid <i class="fas fa-check"></i> </small>
                <?php
                }
                else
                {
                ?>
                    <small class="text-warning fw-bold">Unpaid <i class="fas fa-times"></i> </small>
                <?php
                }
                ?>
           </div>
           <div class="other-fees mb-3 text-light py-3 px-5 navy-dark rounded text-left">
               <h5>Other fees</h5>
               <h3 class="m-0"><img src="images/naira.png" width="70px"> 10,000</h3>
               <?php
                $hostel = $fee_obj->get_payments($_SESSION['student']['id'],"hostel accommodation");
                $acceptance = $fee_obj->get_payments($_SESSION['student']['id'],"acceptance");
                if(in_array("hostel accommodation",$hostel) && in_array("acceptance",$acceptance))
                {
                ?>
                 <small class="text-light fw-bold">Paid <i class="fas fa-check"></i> </small>
                <?php
                }
                else
                {
                ?>
                 <small class="text-warning fw-bold">Unpaid <i class="fas fa-times"></i> </small>
                <?php
                }
                ?>
               
           </div>
           <div class="courses mb-3 text-light py-3 px-5 tomato rounded text-left">
               <h5>Courses Registered</h5>
               <h3 class="m-0"><i class="fas fa-book-open fs-1" ></i> 10</h3>
           </div>
        </div>
    </div>
</main>


<?php require_once('Header&Footer/Footer.php');
?>