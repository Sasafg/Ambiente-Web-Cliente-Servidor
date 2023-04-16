<?php

if(isset($_GET['alerta'])){

    //Eliminacion
    if($_GET['alerta'] == 1){
        ?>
        <div class="alert-danger alert">
            Se eliminó registro
        </div>
        <?php
    }

    //Ingreso
    if($_GET['alerta'] == 2){
        ?>
        <div class="alert-danger alert">
            Se ingresó registro
        </div>
        <?php
    }

    //Actualizacion
    if($_GET['alerta'] == 3){
        ?>
        <div class="alert-danger alert">
            Se actualizó registro
        </div>
        <?php
    }

}



?>