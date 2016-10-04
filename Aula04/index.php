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
        <pre>
            <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Verde", 1.0);

            print_r($c1);
            print_r($c2);
            ?>
        </pre>
    </body>
</html>