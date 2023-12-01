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
                 <div class="h4"><img src="images/naira-dark.png" width="40px"> Hostel Accommodation Fee</div>

                    <ul class="list-group list-group-flush mt-3">
                      <?php
                         if($other_fees['hostel accommodation']) 
                         {
                           $amount = $other_fees['hostel accommodation'];
                         }
                         foreach ($other_fees as $key => $value) 
                         {
                           if($key != 'id')
                           {
                        ?>                     
                          <li class="list-group-item d-flex justify-content-between">
                            <div class="text-secondary fw-bold text-uppercase"><?= $key ?> Fee</div>
                            <p><img src="images/naira-dark.png" width="20px"> <?= $value ?></p>
                          </li>
                        <?php
                           }
                         }
                       ?>
                    </ul>
                    <?php
                      $payments = $fee_obj->get_payments($_SESSION['student']['id'],"hostel accommodation");
                      if(in_array("hostel accommodation",$payments))
                      {
                      ?>
                       <button class="btn py-3 mt-4 tomato fs-3 px-3 text-light text-uppercase fw-bold">Paid <i class="fas fa-check"></i></button>
                    <?php
                    }
                    else
                    {
                    ?>
                       <form action="../exe/payments.php" method="post">
                       <input type="hidden" name="sid" value = "<?= $_SESSION['student']['id'] ?>">
                       <input type="hidden" name="type" value = "<?= "hostel accommodation" ?>">
                       <input type="hidden" name="amount" value = "<?= $amount ?>">
                       <input type="submit" name="submit" class="btn navy py-3 px-3 text-light text-uppercase fw-bold" value="Pay School fees">
                      </form>
                    <?php
                    }
                    ?>

                </div>
           </div>
       </div>
    </div>
</main>


<?php require_once('Header&Footer/Footer.php');
?>

<?php require_once('Header&Footer/Footer.php');
?>