<?php

class Person {
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName){
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
    }

    public function fullName() {
        return $this -> firstName . ' ' . $this -> lastName;
    }
}

$person1 = new Person ('Luis', 'Vera');
// $person2 = new Person ('Diana', 'Garcia');

echo "{$person1 -> fullName()}";

// class Telefono {
//     var $modelo;
//     var $color;
//     var $compania;

//     function __construct ($modelo, $color, $compania){
//         $this -> modelo = $modelo;
//         $this -> color = $color;
//         $this -> compania = $compania;
//     }

//     function llamar (){
//         return 'Llamando...';
//     }

//     function mensaje (){
//         return 'Enviando mensaje...';
//     }
// }

// $celular = new Telefono ('Nokia - 1100', 'gris-negro', 'telcel');

// echo ("El celular {$celular -> modelo} de la compañia {$celular -> compania} se encuentra {$celular -> llamar()}");

// class Carro {

//     var $marca;
//     var $color;
//     var $puertas;

//     function __construct ($marca, $color, $puertas){
//         $this -> marca = $marca;
//         $this -> color = $color;
//         $this -> puertas = $puertas;
//     }

//     function acelera (){
//         return 'puede acelerar';
//     }

//     function claxon (){
//         return 'tocar la bocina';
//     }

// }

// $auto = new Carro ('Toyota', 'rojo', 'cuatro');

// echo ("Tengo un {$auto -> marca} de color {$auto -> color}, con {$auto -> puertas} puertas el cual {$auto -> acelera()} y {$auto -> claxon()}");