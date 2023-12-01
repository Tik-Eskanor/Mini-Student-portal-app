<?php require_once('Header&Footer/Header.php');
?>

<main>
    <div class="container">
        <h2 class="mt-4">Update Password</h2>
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
            <form class="row g-3 mb-4 p-3" method="Post" action="../exe/update_password.php">
                    <div class="col-md-12">
                        <small class="fw-bold">User Password</small>
                        <div class="mt-4">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label  class="form-label text-secondary fw-bold">Current Password</label>
                        <input type="password" name="current" class="form-control" required>
                        <input type="hidden" name="id" value="<?=$_SESSION['student']['id']?>">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label text-secondary fw-bold">New Password</label>
                        <input type="password" name="new" class="form-control"  required>
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