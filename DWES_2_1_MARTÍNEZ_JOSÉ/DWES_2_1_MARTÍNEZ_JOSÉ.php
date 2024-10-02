<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Mostramos el dia de hoy</p>
        <?php
        //Colocamos la zona donde vamos a obtener las horas
        date_default_timezone_set('Europe/Madrid');
        setlocale(LC_TIME, 'spanish'); //Funcion que cambia el idioma a castellano
        $fecha = strftime("%A, %d de %B de %Y"); //Fecha del dia de hoy formateada
        echo ucfirst($fecha);
        ?>
    </body>
</html>
