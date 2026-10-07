<?php
// La palabra clave                                                   'final' impide la herencia
final class Coche {
    public function getColor() {
        echo "Rojo";
    }
}

// Intentar heredar de una clase final
class CocheDeLujo extends Coche {
    // Error Fatal, Clase no heredada.
}
?>