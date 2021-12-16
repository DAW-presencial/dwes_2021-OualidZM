4.
Aúnque la clase hija no tenga el __get y el __set los puede obtener de la clase padre.
Ademas en el codigo escrito en el archivo 4.php,
se puede observar que el unico que tiene el __get y __set   es el padre y gracias a esto la clase hija puede acceder a los valores privados y protected, en el codigo 
se puede observar que la instancia de la clase hija $obj intenta utiliza la propiedad privada de la clase padre, claro si accede directamente: $obj->password, obtendremos
un error de que no se puede acceder al valor, para poder solucionar esto, se tiene que utilizar la funcion magica __set y __get:
    $padre->__set('password', 9812345);
    echo('Password: '.$padre->__get('password')."<br>");

La subclase podra acceder a las propiedades privados y protected de la clase padre si se tienen definidos las funciones mágicas __get y __set

