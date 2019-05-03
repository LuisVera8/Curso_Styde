<?php

class Person {
    protected $firstName;
    protected $lastName;
    protected $nickName;
    protected $changeNickname = 0;

    public function __construct ($firstName, $lastName) {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
    }

    // Se le conoce getters porque al principio del nombre de nuestra funcion se le agrega un GET
    // SETTERS es para guardar información y GETTERS es para mostrar información
    public function getFirstName() {
        return $this -> firstName;
    }

    public function getLastName() {
        return $this -> lastName;
    }
    
    public function setNickName($nickName) {
        if ( $this -> changeNickname >= 2) {
            throw new Exception (
                "No puedes modificar más de dos veces el apodo"
            );
        }
        $this -> nickName = $nickName;
        $this -> changeNickname++;
    }

    public function getNickName() {
        return strtolower ( $this -> nickName );
    }


    public function getFullName() {
        return $this -> firstName . ' ' . $this -> lastName;
    }
}

$person1 = new Person ('Luis', 'Vera');

$person1 -> setNickName('Luigie');
$person1 -> setNickName('LuisVera812');
$person1 -> setNickName('Luis_Vera');

exit ( $person1 -> getNickName() );