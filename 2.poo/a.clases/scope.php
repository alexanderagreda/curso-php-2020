<?php 

    /******** SCOPE o VISIBILIDAD *********/

    /*
        public: se permite acceder dentro o fuera de la clase
        protected: se permite acceder desde la misma clase o mediante clases heredadas
        private: únicamente se puede acceder desde la clase que los definió.
    */


    // Declaracion de la clase Usuario
    class Usuario{

        // Declaracion de atributos
        public $nombre;
        private $edad;
        protected $correo;
       
        // Declaracion metodo constructor
        function __construct($nombre, $edad, $correo){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->correo = $correo;
        }

        // Declaracion metodos comunes
        public function getInfo(){
            return 'Public: ' . $this->nombre . '<br />' . 'Private: ' . $this->edad . '<br />' . 'Protected: ' . $this->correo;
        }

    } //end class Usuario

    // Declaracion del objeto o instancia de la clase usuario
    $pedro = new Usuario('Pedro López',30,'pedrolopez@test.ext');
    
    // Invocar el metodo getInfo() de la clase Usuario
    echo $pedro->getInfo();
    echo '<br />';
    
?>