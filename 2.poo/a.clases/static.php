<?php 

    /* STATIC:  las propiedates o atributos y metodos declarados como estaticos es posible acceder a ellos sin la necesidad de instanciar la clase. Una propiedad declarada como static no puede ser accedida con un objeto de clase instanciado (aunque un método estático sí lo puede hacer). */
    
    // Declaracion de la clase
    class Persona{

        // Declaracion de atributos estaticos para acceder sin instanciar la clase
        public static $fecha = '17 de marzo de 2020';
        
       /* Ejemplo de constructor 

       fucntion __contruct($dato){
           static::$fecha = $dato;
       } 
       
       */

        // Declaracion de un metodo estatico comun  para acceder sin instanciar la clase
        public function mostrarInfo(){
            // Se utiliza $this->fecha para propiedades o atributos no estáticos y se utiliza self::$fecha para atributos o propiedades estáticos.
            return "Fecha: ". self::$fecha;
        }


    }

    // Acceder con el operador resolucion :: al atributo estatico fecha de la clase persona sin instanciar a la clase 
    echo Persona::$fecha;
    echo "<br />";
    // Invocar el metodo mostrarInfo con el operador resolucion :: sin instanciar la clase
    echo Persona::mostrarInfo();

?>