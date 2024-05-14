<?php
include_once __DIR__. "/MaterialeBibliotecario.php";
include_once __DIR__. "/Dvd.php";
include_once __DIR__. "/Libro.php";


$libro1= new Libro("ciao1","jdngoen", 2023);
$libro1->presta();
$libro2= new Libro("ciao2","jnoe", 2003);
$libro2->presta();
$libro2->restituisci();
$libro3= new Libro("ciao3","goen", 2014);
$libro4= new Libro("ciao4","jdn", 2005);

$dvd1= new Dvd("ciao1","jdngoen", 2023);
$dvd1->presta();
$dvd2= new Dvd("ciao2","jnoe", 2003);
$dvd3= new Dvd("ciao3","goen", 2014);
$dvd3->presta();
$dvd4= new Dvd("ciao4","jdn", 2005);

echo "<h2>Numero libri disponibili:<h2>" .Libro::contaLibri(). "<br>";
echo "<h2>Numero DVD disponibili:<h2>" .Dvd::contaDvd(). "<br>";