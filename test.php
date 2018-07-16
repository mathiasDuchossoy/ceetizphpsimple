<?php
/**
 * Created by PhpStorm.
 * User: mathias
 * Date: 14/07/2018
 * Time: 17:38
 */
require 'model/Entreprise.php';
require 'model/AutoEntreprise.php';
require 'model/Sas.php';
require 'model/Adresse.php';
require 'model/Impot.php';

$AutoEntreprise = new AutoEntreprise();

$AutoEntreprise->setSiret(1234)
    ->setDenomination('toto')
    ->calculImpot(1000);

var_dump($AutoEntreprise);

$Sas = new Sas();
$Adresse = new Adresse();
$Adresse->setNumero(1)
    ->setRue('rue Victor Hugo')
    ->setCodePostale(92300)
    ->setVille('Levallois');

$Sas
    ->setSiegeSocialeAdresse($Adresse)
    ->setSiret(1234)
    ->setDenomination('titi')
    ->calculImpot('2000');

var_dump($Sas);


