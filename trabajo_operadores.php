<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        h1{

            text-align:center;
        }

        table {

            background-color:#FFC;
            padding:5px;
            border:#666 5px solid;
        }

        .no_validado{
            font-size:18px;
            color:#f00;
            font-weight: bold;

        }

        .validado{
            font-size:18px;
            color:#0c3;
            font-weight:bold;
        }
    </style>
</head>
<body>
 
<form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
    <table width="15%" align="center">
        <tr>
            <td>Nombre</td>
            <td><label for="nombre_usuario"></label>
            <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><lable for="edad_usuario"></label>
            <input type="text" name="edad_usuario" id="edad_usuario"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
        </tr>
    </table>
    </form>

    

</body>
</html>