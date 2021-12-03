<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<?php

session_start();

    if(isset($_SESSION['agenda'])){
        $agenda = $_SESSION['agenda'];
    }else {
        $agenda = [];
        // $_SESSION['agenda'] = $agenda;

    }
    if(isset($_GET['submit'])){

        $name = filter_input(INPUT_GET,'name');
        $phone = filter_input(INPUT_GET,'phone');
        
        if(empty($name)){
            echo "<p class=" . "redd" . "> You need to add a Name </p>";
        }elseif(empty($phone)){
            if(array_key_exists($name,$agenda)){
                unset($agenda[$name]);
                echo "<p class=" . "redd" . "> Se elimino el contacto '$name' </p>";
            }else{
                echo "<p class=" . "redd" . "> El contacto '$name' no existe en la agenda </p>";
                
            }



        }elseif(array_key_exists($name,$agenda) && !empty($phone)){
            $agenda[$name] = $phone;
            echo "<p class=" . "succes" . "> El valor de '$name', ahora es: $phone </p>";
        }else{
            echo "<p class=" . "succes" . "> Se añadio '$name' </p>";
            $agenda[$name] = $phone;
        }

    }
    if(isset($_GET['destroy'])){
        if(count($agenda) == 0){
            echo "<p class=" . "neutro" . "> Nothing to delete </p>";
        }else{
        session_destroy();
        echo "<p class=" . "neutro" . "> All contacts have benn deleted, refresh to see changes </p>";
        }
    }

    function agenda(){
        global $agenda;
        
        if(!empty($agenda)){
            echo "<ul>";
            foreach($agenda as $name => $val){
                echo "<li>   $name : $val </li>";
            }
            echo "</ul>";

        }

    }

?>
    

    <form method="GET">
        <div>
            <label>Name: <input type="text" name="name" /></label><br />
            <label>Phone: <input type="text" name="phone" /></label><br />
            <input type="submit" name="submit" value="Insertar"><br/>
            <button name="destroy">Delete all Contacts</button>
        </div>
    </form>
    
<?php
    agenda();
    $_SESSION['agenda'] = $agenda;

?>
    
</body>
</html>