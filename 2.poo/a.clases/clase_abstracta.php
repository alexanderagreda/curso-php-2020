<?php 

    /* CLASS ABSTRACTION - ABSTRACCION DE CLASES 
    Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene al menos un método abstracto debe ser definida como tal */

    abstract class Usuario{

        // Metodo comun
        public function getInfo(){
            return 'Accedi al metodo de la clase';
        }

    }

    //Extension de la clase usuario 
    class Miembro extends Usuario{

    };

    
    /* 
        No es posible instanciar la clase abstracta a menos que exista una subclase que herede los atributos y metodos
        $ejemplo = new Usuario;
        echo $ejemplo->getInfo(); 
        
        */

        $ejemplo = new Miembro;
        echo $ejemplo->getInfo();



?>