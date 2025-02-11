<?php

class Alunno implements JsonSerializable{
  protected $nome;
  protected $cognome;
  protected $eta;


  function set_name($nome) {
    $this->nome = $nome;
  }

  public function jsonSerialize(): array{
    return{
      'nome' => $this->nome,
      'cognome' =>$this->cognome,
      'eta' =>$this->eta

    };
  }



  function set_cognome($cognome) {
    $this->cognome = $cognome;
  }

  function set_eta($eta) {
    $this->eta = $eta;
  }


  function get_nome() {
    return $this->nome;
  }

  function get_cognome() {
    return $this->cognome;
  }

  function get_eta() {
    return $this->eta;
  }


  function __construct($nome, $cognome , $eta) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->eta= $eta;
  }


  function stampaAttributi(){
    echo $this->nome . " " . $this->cognome . " " . $this->eta . "<br>";

  }


}


?>
