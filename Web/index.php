<?php

include 'lib/session.php';

$username = $_SESSION['UserName'];

?>

<?php
include 'header.php';
?>

<hr>

<?php
include 'menu.php';
?>

      

      <div class="row">
        <div class="col-md-8">
        <div class="card">
          <div id="data" style="height: 100%; width: 50%;">
                 
          <div class="container">
          
              <h3>Welcome <?php echo($username) ?></h3>
            
            
          </div>
          
          </div>
          </div>
          </div>
        </div>      






  </div>



<script src="js/jquery-1.11.3.js"></script>  

<script src="js/bootstrap.min.js"></script>

<script src="js/canvasjs.min.js"></script>



 
</body></html>
