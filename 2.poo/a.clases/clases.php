<?php 

  /*
    
    PROGRAMACION ORIENTADA A OBJETOS

    Datos ejemplo de la redundacia de variables para evitar esto se utiliza una clase o plantilla
    
    $nombre = 'Carlos';
    $edad = 24;
    $pais = 'Colombia';

    $nombre2 = 'Luis';
    $edad2 = 24;
    $pai2 = 'Colombia';

    $nombre1 = 'Carolina';
    $edad2 = 24;
    $pais3 = 'Colombia';
 */
    
    // Ejemplo de declaracion de la clase  <plantilla o prototipo> Persona con sus atributos o propiedades y metodos en POO
    // Estructura de la clase Persona <usar mayuscula inicial para el nombre>

    class Persona{ 
        // Declaracion de atributos o propiedades
        // Atributo public permite acceder directamente sin metodos
        public $nombre;
        public $edad;
        public $pais;

        //Declaracion del metodo Constructor
        function __construct($nombre, $edad, $pais){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pais = $pais;
        }

        // Declaracion de Metodos de la clase
        public function mostrarInformacion(){
            return 'La persona: ' . $this->nombre . ' tiene ' . $this->edad . ' años y vive en ' . $this->pais . "<br />";
        }
    }

    // Declarar un objeto o instancia de la clase Persona
    $carlos = new Persona('Carlos Perez',34,'Colombia');
    //Invocar el metodo mostrarInformacion de la clase Persona
    echo $carlos->mostrarInformacion();

    // Declarar un segundo objeto o instancia de la clase Persona
    $alejandro  = new Persona('Alejandro Lima',28,'Perú');
    //Invocar el metodo mostrarInformacion de la clase persona
    echo $alejandro->mostrarInformacion();

?>