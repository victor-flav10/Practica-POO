# Practica-POO
Practicas en clase de la Programación Orientada a Objetos

*Problema 1: Herencia Básica y Visibilidad*

Archivos: Coche.php, CocheDeLujo.php
Este ejercicio demuestra cómo una clase hija (CocheDeLujo) hereda atributos y métodos de una clase padre (Coche) utilizando la palabra reservada extends.

Conceptos clave:

Uso de modificadores de acceso como protected (permite que la clase hija acceda a las variables, pero las protege del exterior).

Sobreescritura de métodos.

Problema 2: Late Static Binding (static vs self)

Archivo: LateStaticBinding.php
Un ejercicio enfocado en comprender cómo PHP resuelve las llamadas a métodos estáticos en contextos de herencia.

Conceptos clave:

La diferencia entre usar self:: (hace referencia a la clase donde se define el método) y static:: (hace referencia a la clase desde donde se llama en tiempo de ejecución).

Problema 3: Prevención de Herencia (final)

Archivo: ClaseFinal.php
Un ejemplo rápido sobre cómo proteger una clase para que no pueda ser extendida por ninguna otra.

Conceptos clave:

Uso de la palabra reservada final class para evitar alteraciones no deseadas en la arquitectura del código, generando un error fatal si se intenta usar extends.


Problema 4: Cálculo de Área y Perímetro

Archivo: Circulo.php
Una clase matemática sencilla que encapsula la lógica para calcular el área y el perímetro de un círculo a partir de su radio.

Conceptos clave:

Uso de constantes matemáticas nativas de PHP como M_PI.

Encapsulamiento con propiedades private.

Formateo de salida numérica.


Problema 5: Jerarquía de Usuarios (El Sistema Escolar)

Archivos: Persona.php, Estudiante.php, Docente.php
El ejercicio más completo. Simula la base de un sistema de gestión escolar separando la lógica en múltiples archivos para mantener el código limpio.

Conceptos clave:

Herencia múltiple (simulada): Tanto Estudiante como Docente heredan de la clase base Persona.

Uso de parent::__construct(): Reutilización del constructor de la clase padre para no duplicar código (asignando nombre, apellido, etc.).

Atributos específicos: Los estudiantes manejan índices académicos y cohortes, mientras que los docentes manejan tipos de contratación y departamentos.
