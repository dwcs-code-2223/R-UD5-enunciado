<?php

class AlumnoServicio
{


    private IAlumnoRepository $alumnoRepository;
   


    public function __construct()
    {
        $this->alumnoRepository = new AlumnoRepository();
    
    }

  

   

   }
