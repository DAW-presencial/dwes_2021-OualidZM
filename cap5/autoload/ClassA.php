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
        spl_autoload_register(function ($nomclase) {
            require __DIR__ . "\\$nomclase.php";
        });
        $o = new Persona;
    ?>
</body>
</html>