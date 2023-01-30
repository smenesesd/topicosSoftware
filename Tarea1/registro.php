<?php
include("con_db.php");

if (isset($_POST['register'])){
    if(strlen($_POST['name'])>= 1){
        $name = $_POST['name'];
        $fecha = date("d/m/y"); //es la fecha del registro
        $consulta ="INSERT INTO nombres( Nombre, fecha_reg) VALUES ('$name','$fecha')";
        $resultado = mysqli_query($conexion,$consulta);
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
