<?php 

    /********  HERENCIA *********/

    // Declaracion de la clase Persona
    class Persona{

        // Declaracion de atributos
        public $nombre;
        public $edad;
        public $pais;

        // Metodo constructor
        function __construct($nombre, $edad, $pais)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pais = $pais;
        }

        //Metodo comun
        function mostrarInformacion(){
            return 'La persona es: ' . $this->nombre . ' tiene ' . $this->edad . ' años y vive en ' . $this->pais;
        }
    }

    // Declaracion de la clase Estudiante que hereda las atributos y metodos de la clase Persona
    class Estudiante extends Persona{
        
        function __construct($nombre, $edad, $pais, $carrera){
            parent::__construct($nombre, $edad,$pais);
            $this->carrera = $carrera;
        }

    }

    $carlos = new Estudiante('Carlos Perez',30,'Colombia','Derecho');
    echo $carlos->carrera;

?>