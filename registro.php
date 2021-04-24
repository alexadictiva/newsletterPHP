
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
       * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      :root {
        font-size: 62.5%;
      }
      body {
        font-family: sans-serif;
        background:#256d7b;

      }
      main{
        padding:40px;
        
      }
      
      .infoSuccessContainer h1{
        text-align:center;
        color:#ffff;
        font-size:5rem;
        text-shadow:0 2px 8px black;
      }
      .infoSuccessContainer h2{
        text-align:center;
        color:#5dc1b9;
        font-size:2.5rem;
        text-shadow:0 2px 8px black;
        
      }
      .btnBackContainer{
        text-align:center;
        margin-top:50px;
      }
      .btnBack{
        text-decoration:none;
        background:white;
        color:#5dc1b9;
        font-size:1.7rem;
        box-shadow:0 2px 8px black;
        padding:10px 50px;
        border-radius:50px;
        
      }      

    </style>
    <title>Newsletter</title>
  </head>
  <body>
    <main>
      <section class="infoSuccessContainer">
        <div>
          <?php
         
          $varNombre = $_REQUEST['nombre'];
          $varEmail = $_REQUEST['email'];
          $varCiudad = $_REQUEST['ciudad'];
          
          
          $conection = mysqli_connect("localhost" , "root", "", "newsletter");
          if(!$conection){
            echo '<h2> La conexión falló. Vuele a intentarlo. </h2> <br/>' . mysqli_connect_error();
          }else{
            echo '<h2>Conexión satisfactoria. </h2> <br/>';            
          }
          $sql = "INSERT INTO datos (nombre, email, ciudad) VALUES ('$varNombre', '$varEmail', '$varCiudad')";
          
          if (mysqli_query($conection, $sql)){
            echo  "<h1>  $varNombre, Suscripcion Efectiva.</h1>";

          }else{
            echo "Error: " . mysqli_error($conection);
          }

          mysqli_close($conection)
        ?>
        </div>
        <p class="btnBackContainer">
        <a class="btnBack" href="index.php">Atrás</a></p>
      </section>
    </main>
  </body>
</html>





