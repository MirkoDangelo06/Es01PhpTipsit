<?php

class Veicolo {
  protected $marca;
  protected $anno;



  function set_marca($marca) {
    $this->marca = $marca;
  }

  function set_anno($anno) {
    $this->anno = $anno;
  }




  function get_marca() {
    return $this->marca;
  }

  function get_anno() {
    return $this->anno;
  }



  function __construct($marca, $anno ) {
    $this->marca = $marca;
    $this->anno= $anno;
    
  }


  function stampaAttributi(){
    echo $this->marca . " " . $this->anno . "<br>";
  }

}


?>
