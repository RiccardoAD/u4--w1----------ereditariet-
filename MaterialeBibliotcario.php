<?php

include_once __DIR__ . "/Prestito.php";

abstract class MaterialeBibliotecario implements Prestito{
    static public $contatore =0;
    protected $annoPubblicazione;
    protected $titolo;

    public function __construct($titolo, $annoPubblicazione)
    {
        $this->titolo= $titolo;
        $this->annoPubblicazione= $annoPubblicazione;
        self::$contatore++;
        
    }


    function presta(){
        self::$contatore--;
        static::$contatore--;

    }

    function restituisci(){
        self::$contatore++;
        static::$contatore++;
    }

}
?>