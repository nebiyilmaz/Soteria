<?php

include 'lib/session.php';


$username = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : null;
$name = isset($_SESSION['Name']) ? $_SESSION['Name'] : null;
$surname = isset($_SESSION['SurName']) ? $_SESSION['SurName'] : null;





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
                <h3>Update Profile</h3>
                <form action="/update.php" method='POST'>
                  <div class="form-group">
                  <label for="username">Username:</label>
                    <input type="text" class="form-control" style="margin-bottom: 15;" id="username" placeholder="Enter new username" name="username" autocomplete="off" value="<?php echo($username) ?>">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" style="margin-bottom: 15;" id="name" placeholder="Enter new name" name="name" autocomplete="off" value="<?php echo($name) ?>">
                    <label for="surname">Surname:</label>
                    <input type="text" class="form-control" style="margin-bottom: 15;" id="surname" placeholder="Enter new surrname" name="surname" autocomplete="off" value="<?php echo($surname) ?>">
                  </div>
                  <button type="submit" class="btn btn-default">Update</button>
                </form>
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
