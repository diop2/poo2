<?php




require 'EtudiantService.php';
require 'nonboursier.php';
require 'boursier.php';
require 'loger.php';

$ob= new EtudiantService();


$nb=new loger('pjio','diop','ous','02/04/1995','773861858','diop@gmail.com','sl8','1','2');

var_dump($nb);














?>