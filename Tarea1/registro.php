<?php
include("con_db.php"); //Incluimos la conexion con la base de datos

if (isset($_POST['register'])){ //si se apreto en registro, hacer esta validacion
    //los datos se transmiten por metodo POST
    if(strlen($_POST['name'])>= 1){ //strlen es para identificar la cantidad de caracteres que tiene
        $name = $_POST['name'];
        $fecha = date("d/m/y"); //es la fecha del registro
        $consulta ="INSERT INTO nombres( Nombre, fecha_reg) VALUES ('$name','$fecha')"; //consulta los datos
        $resultado = mysqli_query($conexion,$consulta); //
        if($resultado){
            ?>
            <h3 class = "ok">Su nombre quedo inscrito </h3>
            <?php
            
        } else{
            ?>
            <h3 class = "bad">ERROR ENTRO AL CHAT </h3>
            <?php
        }
    }   else{
        ?>
            <h3 class = "bad">Le faltaron campos por completar </h3>
            <?php
    }
}

?>
