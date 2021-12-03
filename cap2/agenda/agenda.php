<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Agenda</title>
</head>
<body>

    <?php
    if(isset($_GET['agenda'])){
        $agenda = $_GET['agenda'];
    }else{
        $agenda = [];
    }
/**
 * if(isset(filter_input(GET['submit'],)){
 */

    if(isset( $_GET['submit'])){

        $nombre = $_GET['nameValue'];
        $telefono = $_GET['phoneValue'];

        /**
         * if name is empty it will show a warning
         */
        if(empty($nombre)){
            echo  "<p class='errorMsgStyle'>Add a Name and, try again</p>";
        }

        /**
         * if name is not empty and phone number is empty, name and phone number will be deleted  from the schedule (if it existed)
         */

        elseif(empty($telefono)){
            unset($agenda[$nombre]);
        }
        
        /**
         * if the name and the phone number aren't empty
         * it will be added to the array, the index will be equal to the name(Associative array),
         * and the value will equal to the phone number
         */

        elseif(!empty($nombre) && !empty($telefono)){

            $agenda[$nombre] = $telefono;                
        }
    }

    /**
     * In this function, it will add the the name and phone number into the schedule
     */
    function addValue(){
        global $agenda;
        if(count($agenda) == 0){
            echo "Agenda Vacia";
        }else{
            echo "<ul>";
            foreach($agenda as $name => $phone){
                echo "<li>" . $name . ':' . $phone . "</li>";
            }
            echo "</ul>";
        }
    }
    ?>

    <form >
    <h1 class="title">Agenda App</h1>
        <div class="formStyle">
        <?php
        /**
         * In this foreach will make possible to make a list
         */
        foreach($agenda as $name => $phone){
            echo '<input type="hidden" name="agenda[' . $name . ']" ';
            echo 'value="' . $phone . '"/>';
        }
            ?>
        <input type="text" name="nameValue" placeholder="Nombre">
        <input type="text" name="phoneValue" placeholder="Telefono">
        <input type="submit"  name="submit" >
        </div>
    </form>

    <div class="agendaStyle">
    <h2>Agenda</h2>
    <?php
    addValue();
    ?>
</div>

</body>
</html>