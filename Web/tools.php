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
                <form>
                      <input  type="text" id="ping"  placeholder="Target host">
                      <input type="button" value="Ping"  onclick="run('ping')">
                </form>
                <form>
                      <input  type="text" id="ls"  placeholder="Target directory">
                      <input type="button" value="ls"  onclick="run('ls')">
                </form>
                <form>
                      <input  type="text" id="cat"  placeholder="Target file">
                      <input type="button" value="cat"  onclick="run('cat')">
                </form>

              <div id="results"></div>
              
            
            
          </div>
          
          </div>
          </div>
          </div>
        </div>      






  </div>



<script src="js/jquery-1.11.3.js"></script>  

<script src="js/bootstrap.min.js"></script>

<script src="js/canvasjs.min.js"></script>


<script>




var handleError = function (err) {
    alert("Error!!!");
    //console.warn(err);
    document.write(err);

};


function putData(data){

  document.getElementById('results').innerHTML = data;

}



async function FetcOpData(op) {

    //document.write("Fetching repositories...");
    

    var resp="";
    var page="operation.php";

    var host = document.getElementById(op).value;
    var data = {op:op, host:host};

        const res = await fetch(page, {
            method: 'POST',
            withCredentials: true,
            //credentials: 'include',
            headers: {
              'Content-Type' : 'application/json',
              'Authorization': 'DemoToken',
            },
            body: JSON.stringify(data)
        });

        const status = await res.status;
        if(status >= 400 && status < 600){ 
          const body = await res;//.json();
          const message = `An error occured: ${res.status} <br> ${JSON.stringify(body)}`;
          throw new Error(message);
        }

        const body = await res.text();


        /*
        const json = await res.json();
        

        //document.write(JSON.stringify(json));
        await $.each(json, function (index, value) {
            resp = resp + ++i +';'+ value["visibility"] + ";" + value["html_url"] + ';'+value["size"] +';'+ value["language"] +';'+ value["updated_at"] +';'+ value["archived"] + "<br>";
            
        });
        */

    putData(body);

}
//}().catch(handleError);


async function run(op){

  FetcOpData(op)
  .catch(handleError)
  //.then(() => console.log('We do cleanup here'));

}

//run();
</script>
 
</body></html>
