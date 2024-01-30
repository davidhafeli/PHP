<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    function incrementaVariable(){

         static $contador=0; // la linea se ejecuta solo la primera vez y se conserva gracias a static.

        $contador++;

        echo $contador . "<br>";
        
    }

    incrementaVariable(); // llamar a la variable
    incrementaVariable(); // llamar a la variable

    incrementaVariable(); // llamar a la variable
    incrementaVariable(); // llamar a la variable


?>

</body>
</html>