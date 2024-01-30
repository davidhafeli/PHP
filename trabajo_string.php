<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

    .resaltar{
        color:#F00;
        font-weight:bold;


    }



</style>
</head>
<body>
    <?php

        $variable1="Casa";
        $variable2="CASA";

        $resultado=strcasecmp($variable1, $variable2);

        if($resultado){

            echo "No coinciden";
        }else{

            echo "Coinciden";
        }

?>
</body>
</html>