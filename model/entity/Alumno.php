<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Note
 *
 * @author maria
 */
class Alumno  {

   

    use ViewData;

    
    private string $dni ="";
    private string $nombre = "";
    private string $apellidos;
    private string $direccion;
 //   private DateTime $fechaNac;
  

    public function getDni(): string {
        return $this->dni;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    // public function getFechaNac(): DateTime {
    //     return $this->fechaNac;
    // }

    public function setDni(string $dni): void {
        $this->dni = $dni;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    // public function setFechaNac(DateTime $fechaNacimiento): void {
    //     $this->fechaNac = $fechaNacimiento;
    // }

    
    // public function jsonSerialize() {
    //     //Especificamos qué propiedades no públicas queremos que pasen a formar parte del objeto JSON
    //     return array(
    //         'id' => $this->id,
    //         'titulo' => $this->titulo,
    //         'contenido' => $this->contenido,
    //         'imagePath' => $this->imagePath
    //     );
    // }
    
    public function __toString() {
        return $this->getDni() . ' '. $this->getNombre() . ' '.$this->getApellidos(). ' '.$this->getDireccion();
    }


}
