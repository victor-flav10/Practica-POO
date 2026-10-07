<?php
class A {
    public static function miFuncion() {
        // Mostrará el nombre de la clase actual
        echo __CLASS__ . "<br>";
    }

    public static function otraFuncion() {
        // Late Static Binding
        static::miFuncion(); 
        
        // Si usaras self::miFuncion(); siempre llamaría a la de la clase A.
    }
}

class B extends A {
    public static function miFuncion() {
        // Mostrará el nombre de la clase actual
        echo __CLASS__ . "<br>";
    }
}

// Llamada estática desde B
B::otraFuncion();
