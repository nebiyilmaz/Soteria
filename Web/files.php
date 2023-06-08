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
                <form action="upload.php" method="post" enctype="multipart/form-data">

                      <input  type="file" name="uFile">
                      <input type="submit" value="Upload File" name="submit">

                </form>



                    <?php
                  
                    $dir    = 'uploads';

                    echo("<h3>Content of [".$dir."] directory:</h3>");

                    $dirlist = scandir($dir, SCANDIR_SORT_ASCENDING);
                    
                    foreach($dirlist as $file) {

                      echo("<h3><a target='_blank' href='uploads/$file'>".$file."</a></h3>");

                    }
                
                    
                    
                    ?>
              
            
            
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
