<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of UsuarioRepository
 *
 * @author wadmin
 */

class AlumnoRepository extends BaseRepository implements IAlumnoRepository{


    public function __construct() {
     
       
    }
    
     

    public function create($object) {
        //No es necesario en este ejercicio
    }

    public function update($object): bool {
        //No es necesario en este ejercicio
        return false;
    }

   
   

}
