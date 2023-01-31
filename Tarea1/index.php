<!DOCTYPE html>
<html>
<head>
    <title>Ingrese nombre</title>
</head>
<body>
    <form method="post"> <!--vamos a transferir los datos con POST-->
        <input type ="text" name="name" placeholder="Nombre completo">
        <input type="submit" name="register">
    </form>
    <?php
    include("registro.php"); //incluimos la clase de registro
    ?>
</body>
</html>