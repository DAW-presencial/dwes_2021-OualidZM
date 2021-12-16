<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    if(isset($_GET['submit'])){
        echo "Name: ". $name = $_GET['name'];
        echo "last name: ". $last_name = $_GET['apellido'];
        echo "date: ". $date = $_GET['date'];
        echo "first file: ". $first_file = $_GET['first'] ;
        echo "second file: ". $second_file = $_GET['second'];
    }
    
    ?>

    <form >
        <label >Nombre: <input type="text" name="name"></label>
        <label >Apellidos: <input type="text" name="apellido"></label>
        <label >Fecha: <input type="date" name="date"></label>
        <input type="file" value="primer Fichero" name="first">
        <input type="file" value="segundo Fichero" name="second">
        <input type="submit" name="submit">
    </form>

</body>
</html>