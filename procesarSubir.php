<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'clases/Leer.php';
        require_once 'clases/Subir.php';

        $subir = new Subir("archivo");
        $subir->setNombre(Leer::post("nombre"));
        $subir->setAccion(Leer::post("valor"));
        $subir->subir();
        if ($subir->getMensaje_Error() == "") {
            echo '<script>alert (" Mensaje: Procesado");</script>';
        } else {
            echo '<script>alert (" Mensaje: ' . $subir->getMensaje_Error() . '");</script>';
        }
        ?>
    </body>
</html>