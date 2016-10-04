<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->modelo = "BIC cristal";
            //$c1->ponta = 0.5; -> Atributo privado
            $c1->rabiscar();
            print_r($c1);
            ?>
        </p>
    </body>
</html>