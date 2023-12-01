<?php require_once('Header&Footer/Header.php');
?>

<main>
    <div class="container">
       <h3 class="mt-5 mb-4">Payment History</h3>
       <div class="row">
           <div class="col-md-12 mb-3">
               <div class="table-responsive">
               <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Session</th>
                    <th scope="col">Type</th>
                    <th scope="col">Ammount</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    </tr>
                 </thead>
                 <tbody>
                    <?php
                      $sn = 1;
                      foreach($payment_history as $history)
                      {
                    ?> 
                    <tr>
                    <th scope="row"><?= $sn++ ?></th>
                    <td><?= $_SESSION['student']['date']."/".$_SESSION['student']['date']+1 ?></td>
                    <td><?= $history['type']." Fee" ?></td>
                    <td><?= number_format($history['amount'],'0','.',',') ?></td>
                    <td><?= $history['date'] ?></td>
                    <td><?= $history['status'] == 1  ?"Successful":"Failed" ?></td>
                    </tr>
                    <?php
                      }
                    ?>
                 </tbody>
                </table>  
               </div>  
           </div>
       </div>
    </div>
</main>

<?php require_once('Header&Footer/Footer.php');
?>