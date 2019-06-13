<?php 
$requestId = $_SESSION["requestId"];
$respuesta = ControladorRespuesta::ctrValidaEstadoPago($requestId)
 ?>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-body">
                     <?php  

                      $domain = strstr($respuesta, ' ');
                      $peti = strstr($respuesta, ' ', true);
                      
                     ?>
                       <h1>N° PETICIÓN : <?php echo $peti ?></h1>

                    <div class="alert alert-info" role="alert" style ="font-size:19pt; margin-top:22px;">
                         <strong>Informacion !</strong> <?php echo $domain ?>
                     </div>

                     <a href="venta" class="btn btn-primary">Volver</a>
                  </div>
            </div>
        </div>
    </div>
</div>



    