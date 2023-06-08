<?php

include 'lib/lib.php';

session_start();
session_regenerate_id();
$_SESSION['LOGIN'] = 0;

?>

<?php
include 'header.php';
?>

      <hr>

      <div class="row">
        <div class="col-md-8">
        <div class="card">
          <div id="data" style="height: 100%; width: 50%;">
                 
          <div class="container">
                <h2>Dummy Login</h2>
                <form action="/check.php" method='POST'>
                  <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter dummy username" name="username" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter dummy password" name="password" autocomplete="off">
                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
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
