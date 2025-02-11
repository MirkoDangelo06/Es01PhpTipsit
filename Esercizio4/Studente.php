<?php
    class Studente extends Persona{
        private $matricola;

        function __construct($nome, $cognome ,$matricola) {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->matricola = $matricola;
          }
          
          function set_matricola($matricola) {
            $this->matricola = $matrciola;
          }
        
          function get_matricola() {
            return $this->matricola;
          }
        


          function presentati(){
            return " ciao , io sono lo studente " . $this->nome . " " . $this->cognome . " e la mia matricola è " . $this->matricola  ."<br>" ;
        }




    }
?>