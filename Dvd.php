<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Dvd extends MaterialeBibliotecario{
    protected $registra;
    static public $contatore=0;

    public function __construct($titolo, $registra, $annoPubblicazione ){
      parent::__construct($titolo,$annoPubblicazione);
      $this->registra=$registra;
      self::$contatore++;
    }

    

    static public function contaDvd() {
        return self::$contatore;
    }
}