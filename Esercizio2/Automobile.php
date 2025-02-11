<?php

class Automobile extends Veicolo{
 
    private $modello;

    function set_modello($modello) {
        $this->anno = $modello;
      }
      function get_modello() {
        return $this->modello;
      }

      function __construct($marca, $anno ,$modello) {
        $this->marca = $marca;
        $this->anno= $anno;
        $this->modello= $modello;
      }


     function stampaAttributi(){
     echo " 1)Marca: " . $this->marca .  " 2)Anno: " . $this->anno  . " 3) Modello: " . $this->modello . "<br>";
  }

     

}


?>
