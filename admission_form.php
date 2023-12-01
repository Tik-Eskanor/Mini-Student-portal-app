<?php require_once("header&footer/Header.php") ?>
<main>
    <section class="requirements">
        <div class="container">
           <h4 class="mt-5 fw-bold mb-3 p-3">Create Account</h4>
           <?php 
              if(isset($_SESSION['message']))
              {
            ?> 
             <div class="p-3 text-danger fw-bold"><?= $_SESSION['message']?></div>
            <?php ;
                  unset($_SESSION['message']);
              }
            ?>
           <div class="form-container">
           <form class="row g-3 mb-4 p-3" method="post" action="exe/add_student.php">
                <div class="col-12">
                    <label for="inputFirstname" class="form-label">FirstName</label>
                    <input type="text" name="fname" class="form-control" id="inputFirstname" required>
                </div>
                <div class="col-12">
                    <label for="inputLastname" class="form-label">LastName</label>
                    <input type="text" name="lname" class="form-control" id="inputLastname" required>
                </div>
                <div class="col-12">
                    <label for="inputON" class="form-label">OtherNames</label>
                    <input type="text" name="oname" class="form-control" id="inputON">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control" id="inputPassword4" required>
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPhone" class="form-label">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="inputPhone" required>
                </div>
                <div class="col-md-6">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select id="inputGender" name="gender" class="form-select" required>
                        <option selected> </option>
                        <option value="male">Male</option>  
                        <option value="female">Female</option>           
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputDOB" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" id="inputDOB" required>
                </div>
                <div class="col-md-6">
                    <label for="inputLGA" class="form-label">Local Government Area</label>
                    <input type="text" name="lga" class="form-control" id="inputLGA" required>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" name="state" class="form-select" required>
                        <option selected> </option>
                        <option value="Oyo">Oyo</option>  
                        <option value="Lagos">Lagos</option> 
                        <option value="Edo">Edo</option>           
                        <option value="Abia">Abia</option>           
                        <option value="Ogun">Ogun</option>           
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputP-t" class="form-label">Programme Type</label>
                    <select id="inputP-t" name="pt" class="form-select" required>
                    <option selected>Select Programme Type</option>
                    <?php
                      foreach ($programmes as $programme) 
                      {
                       ?>
                         <option value="<?= $programme['id'] ?>"><?= $programme['name'] ?></option>           
                       <?php  
                      }
                     ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputProgramme" class="form-label">Programme</label>
                    <select id="inputProgramme" name="p" class="form-select" required>
                    <option selected>Select Programme</option>
                    <option value="NATIONAL DIPLOMA">NATIONAL DIPLOMA</option>
                    <option value="HIGHER NATIONAL DIPLOMA">HIGHER NATIONAL DIPLOMA</option>

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputCourse" class="form-label">Course of Study</label>
                    <select id="inputCourse" name="course" class="form-select" required>
                    <option selected>Choose...</option>
                    <?php
                      foreach ($courses as $course) 
                      {
                       ?>
                         <option value="<?= $course['id'] ?>"><?= $course['name'] ?></option>           
                       <?php  
                      }
                     ?>
                    </select>
                </div>
                <div class="pt-3"><h3>Next of Kin Details</h3></div>
                <div class="col-md-4">
                    <label  class="form-label">Name</label>
                    <input type="text" name="kname" class="form-control"  required>
                </div>
                <div class="col-md-4">
                    <label  class="form-label">Address</label>
                    <input type="text" name="kaddress" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label  class="form-label">GSM</label>
                    <input type="text" name="kphone" class="form-control"  required>
                </div>
                <div  class="pt-3"><h3>Other Information</h3></div>
                <div class="col-md-4">
                    <label  class="form-label">Blood Group</label>
                    <input type="text" name="bg" class="form-control"  required>
                </div>
                <div class="col-md-4">
                    <label  class="form-label">Genotype</label>
                    <input type="text" name="gt" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label  class="form-label">Physical Challenges</label>
                    <input type="text" name="challenges" class="form-control">
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" name="submit" class="btn btn-secondary fw-bold">Create Acount</button>
                </div>
                </form>
           </div>
        </div>
    </section>
</main>
<!-- Account Creation is Successfully, Kindly Login now
Login Using Continue Application -->
<!-- Login Successfully
You will be redirected to your personalized section... -->
<!-- p5juyuyuuy@gmail.com

Password: 1234 -->
<?php require_once("header&footer/Footer.php") ?>
