<?php

class AlumnoController {

    public $page_title;
    public $view;
    private $servicio;
    
   

    const VIEW_FOLDER = 'alumno';

    public function __construct() {
        $this->view = self::VIEW_FOLDER . DIRECTORY_SEPARATOR . 'list_alumno';
        $this->page_title = '';
        $this->servicio = new AlumnoServicio();        
    
    }

    /* List all alumnos */

    public function list() {
        $this->view = self::VIEW_FOLDER . DIRECTORY_SEPARATOR . 'list_alumno';
        $this->page_title = 'Listado de alumnos';

       
    }

    public function tx(){
        $this->view = self::VIEW_FOLDER . DIRECTORY_SEPARATOR .'tx_alumno';
        $this->page_title = 'Transferir alumnos';

      
    }

   
   


}

?>