<?php require_once("header&footer/Header.php") ?>
<main>
    <section class="requirements">
        <div class="container">
           <h4 class="mt-5 fw-bold fs-1 mb-3 p-3">LOGIN</h4>
           <?php 
              if(isset($_SESSION['message']))
              {
            ?> 
             <div class="p-3 text-success fw-bold"><?= $_SESSION['message']?></div>
            <?php ;
                  unset($_SESSION['message']);
              }
            ?>
           <div class="form-container">
           <form class="row g-3 mb-4 p-3" method="Post" action="exe/login_student.php">
               <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control" id="inputPassword4" required>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" name="submit" class="btn btn-secondary fw-bold">Login</button>
                </div>
                </form>
           </div>
        </div>
    </section>
</main>
<?php require_once("header&footer/Footer.php") ?>
