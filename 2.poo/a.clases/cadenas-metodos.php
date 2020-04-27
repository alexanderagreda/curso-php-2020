<?php 
    
    // Declaración de la clase Persona
    class Persona{

        // Declaración de atributos
        public $nombre;
        public $correo;

        // Metodo constructor
        function __construct($nombre, $correo){
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        // Metodos comunes

        public function getNombre(){
            echo "Nombre: " . $this->nombre . "<br />";
            //Util para encadenar metodos
            return $this;
        }

        public function getCorreo(){
            echo "Correo: " . $this->correo . "<br />";
            //Util para encadenar metodos
            return $this;
        }

    }
    // Crear un objeto o instancia de la clase Persona
    $carlos = new Persona('Carlos', 'example@mail.com.co');
    //Invocar metodos encadenados del objeto
    $carlos->getNombre()->getCorreo();
    

?>