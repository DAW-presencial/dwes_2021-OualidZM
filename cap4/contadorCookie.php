<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
<?php



function cok(){
    if ( isset( $_COOKIE[ 'cooki_value' ] ) ) {

        setcookie( 'cooki_value', $_COOKIE[ 'cooki_value' ] + 1);
        echo 'Esta es la '. $_COOKIE[ 'cooki_value' ] . ' que entras en la página';
    }
    else {
        echo 'Esta es la primera vez que entras en la página, refresca';
        setcookie( 'cooki_value', 1, time() + 3600 * 24 );
    }
}

cok();
?>

</body>
</html>



