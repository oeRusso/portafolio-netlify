<?php
    
    require_once './contacto.php';
    require_once './db.php';

    if (count($_POST) > 0) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'nombre de prueba';
        $email = isset($_POST['email']) ? $_POST['email'] : 'email de prueba';
        $tema = isset($_POST['tema']) ? $_POST['tema'] : '...';
        $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '...';

        $profesores = new Contacto($nombre, $email, $tema, $mensaje);

        
        $profesores->save();

        header("Location:../index.html");
    
    }

?>