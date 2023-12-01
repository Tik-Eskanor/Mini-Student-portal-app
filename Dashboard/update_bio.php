<?php require_once('Header&Footer/Header.php');
?>

<main>
    <div class="container">
        <h2 class="mt-4">Update Bio Details</h2>
        <?php 
              if(isset($_SESSION['message']))
              {
            ?> 
             <div class="p-3 text-danger fw-bold"><?= $_SESSION['message']?></div>
            <?php
                  unset($_SESSION['message']);
              }
            ?>
           <div class="form-container">
            <form class="row g-3 mb-4 p-3" method="Post" action="../exe/update_student.php">
                    <div class="col-md-12">
                        <small class="fw-bold">User Bio</small>
                        <div class="mt-4">
                        <div class="text-secondary fw-bold mb-1">Photo</div>
                        <div><i class="fas fa-user-circle fs-1"></i></div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-secondary fw-bold ">FirstName</label>
                        <input type="text" name="fname" class="form-control" value=" <?=$_SESSION['student']['lastname']." ".$_SESSION['student']['firstname']." ".$_SESSION['student']['othername'] ?>" readonly>
                        <input type="hidden" name="id" value="<?= $_SESSION['student']['id'] ?>">
                   </div>
                   <div class="col-md-6">
                        <label  class="form-label text-secondary fw-bold ">Matric Number</label>
                        <input type="text" name="mn" class="form-control" value="<?= $_SESSION['student']['matric_no'] ?>" readonly>
                   </div>
                   <div class="col-md-4">
                        <label  class="form-label text-secondary fw-bold ">GSM</label>
                        <input type="text" name="phone" class="form-control" value="<?= $_SESSION['student']['phone'] ?>">
                   </div>
                   <div class="col-md-4">
                        <label  class="form-label text-secondary fw-bold ">Contact Address</label>
                        <input type="text" name="address" class="form-control" value="<?= $_SESSION['student']['address'] ?>">
                   </div>
                   <div class="col-md-4">
                        <label  class="form-label text-secondary fw-bold ">Kin Address</label>
                        <input type="text" name="kaddress" class="form-control" value="<?= $_SESSION['student']['kaddress'] ?>">
                   </div>
                   <div class="col-md-4">
                        <label  class="form-label text-secondary fw-bold ">Blood Group</label>
                        <input type="text" name="bg" class="form-control" value="<?= $_SESSION['student']['blood_group'] ?>">
                   </div>
                   <div class="col-md-4">
                        <label  class="form-label text-secondary fw-bold ">Genotype</label>
                        <input type="text" name="gt" class="form-control" value="<?= $_SESSION['student']['genotype'] ?>">
                   </div>
                   <div class="col-md-4">
                        <label  class="form-label text-secondary fw-bold ">Challenges</label>
                        <input type="text" name="challenges" class="form-control" value="<?= $_SESSION['student']['challenges'] ?>">
                   </div>
                    <div class="col-12 mt-4">
                        <button type="submit" name="submit" class="btn btn-secondary fw-bold">Update</button>
                    </div>
            </form>
           </div> 
    </div>
</main>


<?php require_once('Header&Footer/Footer.php');
?>