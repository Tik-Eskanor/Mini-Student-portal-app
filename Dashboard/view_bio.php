<?php require_once('Header&Footer/Header.php');
?>

<?php require_once('Header&Footer/Header.php');
?>

<main>
    <div class="container">
       <h3 class="mt-5 mb-4">Profile Details</h3>
           <?php 
              if(isset($_SESSION['message']))
              {
            ?> 
             <div class="p-3 text-success fw-bold"><?= $_SESSION['message']?></div>
            <?php
                  unset($_SESSION['message']);
              }
            ?>
       <div class="row">
           <div class="col-md-6 mb-3">
               <div class="border border-light rounded p-3 bg-light">
                 <div class="h4"><i class="fas fa-user"></i> Bio Data</div>
                   <div class="mt-4">
                        <div class="text-secondary fw-bold mb-1">Photo</div>
                        <div><i class="fas fa-user-circle fs-1"></i></div>
                    </div>

                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Matriculation Number</div>
                          <p><?= $_SESSION['student']['matric_no'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">FullName</div>
                          <p> <?=$_SESSION['student']['lastname']." ".$_SESSION['student']['firstname']." ".$_SESSION['student']['othername'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Email</div>
                          <p><?= $_SESSION['student']['email'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Date of Birth</div>
                          <p><?= $_SESSION['student']['dob'] ?></p>
                        </li>
                        <li class="list-group-item">
                        <div class="text-secondary fw-bold">State of Origin</div>
                          <p><?= $_SESSION['student']['state'] ?></p>
                        </li>
                        <li class="list-group-item">
                        <div class="text-secondary fw-bold">LGA</div>
                          <p><?= $_SESSION['student']['lga'] ?></p>
                        </li>
                    </ul>
                </div>
           </div>
           <div class="col-md-6 mb-3">
               <div class="border border-light rounded p-3 bg-light">
                 <div class="h4"><i class="fas fa-school"></i> School Details</div>

                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Faculty</div>
                          <p><?= $faculty['name']?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Department</div>
                          <p> <?=$course['name']?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Programme</div>
                          <p><?= $_SESSION['student']['programme'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Course of study</div>
                          <p><?= $course['name'] ?></p>
                        </li>
                        <li class="list-group-item">
                        <div class="text-secondary fw-bold">Level</div>
                          <p><?= $_SESSION['student']['programme'] == 'NATIONAL DIPLOMA' ? 'ND1':'HHN1';?></p>
                        </li>
                        <li class="list-group-item">
                        <div class="text-secondary fw-bold">Status</div>
                          <p>New</p>
                        </li>
                        <li class="list-group-item">
                        <div class="text-secondary fw-bold">Gender</div>
                          <p class="text-uppercase"><?= $_SESSION['student']['gender'] ?></p>
                        </li>
                    </ul>
                </div>
           </div>
           <div class="col-md-4 mb-3">
               <div class="border border-light rounded p-3 bg-light">
                 <div class="h4"><i class="fas fa-envelope"></i> Contact Deatails</div>

                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Contact Address</div>
                          <p><?= $_SESSION['student']['address'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Home Addres</div>
                          <p> <?= $_SESSION['student']['address'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">GSM</div>
                          <p><?= $_SESSION['student']['phone'] ?></p>
                        </li>                     
                    </ul>
                </div>
           </div>
           <div class="col-md-4 mb-3">
               <div class="border border-light rounded p-3 bg-light">
                 <div class="h4"><i class="fas fa-user"></i> Next of Kin Deatails</div>

                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Name</div>
                          <p><?= $_SESSION['student']['kname'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Addres</div>
                          <p> <?= $_SESSION['student']['kaddress'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">GSM</div>
                          <p><?= $_SESSION['student']['kphone'] ?></p>
                        </li>                     
                    </ul>
                </div>
           </div>
           <div class="col-md-4 mb-3">
               <div class="border border-light rounded p-3 bg-light">
                 <div class="h4"><i class="fas fa-user"></i> Other Information</div>

                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Blood Group</div>
                          <p class="text-uppercase"><?= $_SESSION['student']['blood_group'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Genotype</div>
                          <p> <?= $_SESSION['student']['genotype'] ?></p>
                        </li>
                        <li class="list-group-item">
                          <div class="text-secondary fw-bold">Challenges</div>
                          <p><?= $_SESSION['student']['challenges'] ?></p>
                        </li>                     
                    </ul>
                </div>
           </div>
       </div>
    </div>
</main>


<?php require_once('Header&Footer/Footer.php');
?>

<?php require_once('Header&Footer/Footer.php');
?>