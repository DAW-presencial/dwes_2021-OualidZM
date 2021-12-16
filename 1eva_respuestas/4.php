<?php
// Definir clase padre

class ClassParent {
    //definimos los metodos
    public string $name;
    protected string $second_name;
    private int $password;
    public $register_date;

    public function __construct($name,$second_name,$register_date) {
        $this->name = $name;
        $this->second_name = $second_name;
        // $this->password = $password;

        $this->register_date = $register_date;
        
    }

    public function __get($v) {
        return $this->$v;

    }

    public function __set($k, $v) {
        $this->$k = $v;
    }
}

// Definir clase hija

class Child extends ClassParent {
    public string $gender;

    public function __construct($name,$second_name,$register_date,$gender)
    {
        $this->register_date = $register_date;
        parent::__construct($name,$second_name,$register_date);
        $this->gender = $gender;
        
    }
}

// Ahora faltaria instanciar, utilizar __set y __get y
// mostrar los datos por pantalla

$padre = new ClassParent('homero','Santos','11-5-2021');
echo('-----------------ClassParent clase-----------------'."<br>");

//name parent
echo "Name: " . $padre->name . "<br>";

echo "Second Name: " . $padre->second_name . "<br>";

//setting password
$padre->__set('password', 123456);

echo 'Password: '.$padre->__get('password')."<br>";

//register date parent
echo "Register Day: " . $padre->register_date . "<br>";



$obj = new Child('amina','Carlina','6-12-2021','female');
echo '-----------------Child clase-----------------'."<br>";

//name child
echo "Name: " . $obj->name . "<br>";

echo "Second Name: " . $obj->second_name . "<br>";

//setting passwrd
$padre->__set('password', 9812345);
echo('Password: '.$padre->__get('password')."<br>");
//register date
echo "Register Day: " . $obj->register_date . "<br>";
//gender

echo "Gender: " . $obj->gender;
