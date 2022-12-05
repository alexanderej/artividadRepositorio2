<?php
include 'conexion.php';
?>
<?php
    $Pnombre = $_POST['primernombre'];
    $Snombre = $_POST['segundonombre'];
    $Papellido = $_POST['primerapellido'];
    $Sapellido = $_POST['segundoapellido'];
    $Ciudad = $_POST['ciudad'];
    $Edad = $_POST['edad'];

    
    ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style>
  body{
    background-image: url(img/fondo4.png);
    background-size: cover;
  }

</style>
<body>



  <div class="container" id="cont">
    <div align="center">
      <h1>FORMULARIO</h1>
      <h2>Registrar Informacion</h2>
    </div>
    <form action="" method="POST">
    <div class="container" style=" background-color: rgb(243, 236, 236); border-radius: 40px;">
      <br>
      <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label class="form-label"><b>Primer Nombre</b></label>
          <input type="text" class="form-control" id="primernombre" name="primernombre">
        </div>
        <div class="col-sm-6">
          <label class="form-label"><b> Segundo Nombre</b> </label>
          <input type="text" class="form-control" id="segundonombre" name="segundonombre">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label class="form-label"><b>Primer Apellido</b></label>
          <input type="text" class="form-control" id="primerapellido" name="primerapellido">
        </div>
        <div class="col-sm-6">
          <label class="form-label"><b>Segundo Apellido</b></label>
          <input type="text" class="form-control" id="segundoapellido" name="segundoapellido">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label class="form-label"><b>Ciudad</b></label>
          <input type="text" class="form-control" id="ciudad" name="ciudad">
        </div>
        <div class="col-sm-6">
          <label class="form-label"><b>Edad</b></label>
          <input type="number" class="form-control" id="edad" name="edad">
        </div>
      </div>

        
      </div>
      
      <?php
      #comprobar si los campos estan vacios o no 
                            if (!empty($_POST)) {

                                if (empty($_POST['primernombre']) || empty($_POST['segundonombre'])|| empty($_POST['primerapellido'])|| empty($_POST['segundoapellido']) || empty($_POST['ciudad']) || empty($_POST['edad'])) {
                            ?>
                                    <script>
                                        alert("Todos los campos son obligatorios")
                                    </script>
                                    <?php
                                } else {

                                  $primernombre = $_POST['primernombre'];
                                  $segundonombre = $_POST['segundonombre'];
                                  $primerapellido = $_POST['primerapellido'];
                                  $segundoapellido = $_POST['segundoapellido'];
                                  $ciudad = $_POST['ciudad'];
                                  $edad = $_POST['edad'];
                                    $llenartabla = "INSERT INTO usuario(Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Ciudad,Edad ) values('$primernombre','$segundonombre','$primerapellido','$segundoapellido',' $ciudad','$edad')";
                                    if ($conexion->query($llenartabla) === TRUE) {
                                    ?>
                                        <script>
                                            alert("REGISTRO CORRECTO")
                                        </script>
                                    <?php  } else {
                                    ?>
                                        <script>
                                            alert("REGISTRO INCORRECTO")
                                        </script>

                                <?php
                                    }
                                  }
                                }
                                ?>
      
      <div class="col-sm-6">
          <button type="button" class="btn btn-primary" >Añadir</button>
          <button type="button" class="btn btn-primary" >Modificar</button>
          <button type="button" class="btn btn-primary" >Eliminar</button>
          <br><br>
        </div>

      

      </form>

      <br>

    </div>}
</body>


</html>