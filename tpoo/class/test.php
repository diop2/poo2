<?php




require 'EtudiantService.php';
require 'nonboursier.php';

$ob= new EtudiantService();


$nb=new nonboursier('pjio','diop','ous','02/04/1995','773861858','diop@gmail.com','sl8');

var_dump($nb);















?>