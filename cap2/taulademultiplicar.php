<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>

    <?php
        $indice_multiplicador_limit = [1,2,3,4,5,6,7,8,9,10];
        $multiplicador_limit = [1,2,3,4,5,6,7,8,9,10];
        echo "<table border = 2>";
        echo "<th>tabla</th>";


        foreach($indice_multiplicador_limit as $ind_val){

            echo "<th>$ind_val </th>"; /**recoremos el array,
                                        y hacemos un display de los valores */
        }


        foreach($multiplicador_limit as $mult_val){

            echo "<tr>";
            echo "<th>";
            echo $mult_val;
            echo "</th>";/**recoremos el array,
            y hacemos un display de los valores */

            foreach($indice_multiplicador_limit as $val){
                echo "<td>";
                echo  $val*$mult_val;/**hacemos la multiplicacón y devolvemos el resultado en row */
                echo "</td>";
            }
            echo "</tr>";
        }
            echo "</Table>";

        ?>



</body>
</html>