<?php require_once('Header&Footer/Header.php');
?>

<main>
    <div class="container">
       <h3 class="mt-5 mb-4">Courses Offered</h3>
       <div class="row">
           <div class="col-md-12 mb-3">
           <div class="d-flex justify-content-between p-3"><span>Faculty: <?= $faculty['name'] ?></span>  <span>Level: <?= $_SESSION['student']['programme'] == 'NATIONAL DIPLOMA' ? 'ND1':'HHN1';?></span></div>
               <div class="table-responsive">
                 <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Code</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-uppercase">Introduction to <?= $course['name'] ?></td>
                            <td><?= substr($course['name'],0,3) ?> 111</td>
                            <td>3</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-uppercase">Digital to <?= $course['name'] ?></td>
                            <td><?= substr($course['name'],0,3) ?> 112</td>
                            <td>3</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-uppercase">Statistics of <?= $course['name'] ?></td>
                            <td><?= substr($course['name'],0,3) ?> 113</td>
                            <td>3</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-uppercase">Application S.W for <?= $course['name'] ?></td>
                            <td><?= substr($course['name'],0,3) ?> 114</td>
                            <td>3</td>
                            <td>E</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="text-uppercase"><?= $course['name'] ?> in internet</td>
                            <td><?= substr($course['name'],0,3) ?> 115</td>
                            <td>3</td>
                            <td>E</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="text-uppercase">Use of english</td>
                            <td>GNS 111</td>
                            <td>1</td>
                            <td>G</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="text-uppercase">citizenship education</td>
                            <td>GNS 112</td>
                            <td>1</td>
                            <td>G</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="text-uppercase">Logic and modern<?= $course['name'] ?></td>
                            <td><?= substr($course['name'],0,3) ?> 116</td>
                            <td>3</td>
                            <td>E</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="text-uppercase">Functions of <?= $course['name'] ?></td>
                            <td><?= substr($course['name'],0,3) ?> 117</td>
                            <td>3</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="text-uppercase">ADVANCED <?= $course['name'] ?></td>
                            <td><?= substr($course['name'],0,3) ?> 118</td>
                            <td>3</td>
                            <td>C</td>
                        </tr>
                     </tbody>
                 </table>  
               </div>  
           </div>
       </div>
    </div>
</main>

<?php require_once('Header&Footer/Footer.php');
?>