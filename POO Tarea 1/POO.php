<!-- Tarea número 1 sobre Programación Orientada a Objetos -->
<?php

class Ejemplo{ #Creación de la clase (molde o plantilla para los objetos)

    #Atributos 
public string $name;
public int $age;

#Método constructor
public function __construct($name, $age){
    $this->name=$name;
    $this->age=$age;
}

#Método 01
public function  Saludar(){
    return "Hola, soy ".$this->name.", tengo la edad de ".$this->age." años y este es mi primer ejemplo de POO en PHP.";
}

#Método 02
public function Saludar2(){
    return "Mi nivel de pelea es de 50,000.";
}
}

#Objeto 1
$juan = new Ejemplo("Hector Juan Pérez Martínez",27);
echo $juan->Saludar();

echo "<br><br>";

#Objeto 2
$willie = new Ejemplo("Willie Colón",30);
echo $willie->Saludar();

echo "<br><br>";

#Objeto 3
$goku = new Ejemplo("Goku",35);
echo $goku->Saludar();
echo " ".$goku->Saludar2();