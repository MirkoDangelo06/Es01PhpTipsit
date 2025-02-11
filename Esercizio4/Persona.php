<?php
class Persona{
    private $nome;
    private $cognome;
   
    function set_name($nome) {
      $this->nome = $nome;
    }
  
    function set_cognome($cognome) {
      $this->cognome = $cognome;
    }
  
    function get_nome() {
      return $this->nome;
    }
  
    function get_cognome() {
      return $this->cognome;
    }


    function __construct($nome, $cognome ) {
        $this->nome = $nome;
        $this->cognome = $cognome;
       
      }
    


    function presentati(){
        return " ciao , io sono " . $this->nome . " " . $this->cognome . "<br>" ;
    }
}
?>