<?php
require_once "Persona.php";

class Docente extends Persona {
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;
    protected string $maximoTitulo;
    protected string $tipoContratacion;

    public function __construct(string $codigoDocente, string $departamento, string $categoria, string $maximoTitulo, string $tipoContratacion, string $nombre, string $apellido, string $fechaNacimiento) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        
        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->maximoTitulo = $maximoTitulo;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getDatosDocente() {
        return "Profesor: {$this->nombre} {$this->apellido} | Depto: {$this->departamento} | Título: {$this->maximoTitulo}";
    }
}
?>