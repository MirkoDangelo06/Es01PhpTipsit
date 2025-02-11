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
    echo $this->marca . " " . $this->anno . " " .$this->modello . "<br>";
  }

     

}


?>
