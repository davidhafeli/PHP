<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $nombre="Juan";

    function dameNombre() {

        global $nombre;          // convierte la variable nombre en una variable global. Para poder acceder desde fuera.           

        $nombre="El nombre es " . $nombre;

    }

    dameNombre();

    echo $nombre // cuidado son dos variables diferentes y respecto a otros lenguajes de programación imprime Juan.



?>
</body>
</html>