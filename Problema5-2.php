<?php
require_once "Persona.php"; // Incluimos la clase Persona

class Estudiante extends Persona {
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;
    protected int $modalidadEstudio;

    public function __construct(float $indiceAcademico, int $cohorte, int $estadoAcademico, int $modalidadEstudio, string $nombre, string $apellido, string $fechaNacimiento) {
        // Llamamos al constructor de Persona para inicializar nombre, apellido y fecha
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getIndiceAcademico(): float { return $this->indiceAcademico; }
    public function getCohorte(): int { return $this->cohorte; }
    public function getEstadoAcademico(): int { return $this->estadoAcademico; }
    public function getModalidadEstudio(): int { return $this->modalidadEstudio; }
}
?>