<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $variable1= 8;
        $variable2="8"; // de tipo string
        $variable3="Juan";

        if($variable1!=$variable3){

            echo "Son diferentes";
        } else {

            echo "Son iguales";

        }

    ?>

    <?php

    if(isset($_POST["button"])){

        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];

        calcular($operacion);

    }

    function calcular($calculo){ // parentesis de parametros o argumentos

        if(!strcmp("Suma", $calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1+$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }

        if(!strcmp("Resta", $calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1+$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>" ;

        }

        if(!strcmp("Multiplicación", $calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1+$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }

        if(!strcmp("División", $calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1+$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }

        if(!strcmp("Módulo", $calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1+$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";


        }
    }



?>
</body>
</html>