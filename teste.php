<?php

use Thiago\Animal\Modelo\Animal;
use Thiago\Animal\Service\Ferramenta;
use Thiago\Animal\Service\Resultado;

require_once 'autoload.php';



$lagartixa = new Animal('lagartixa', 'reptil');
$cobra = new Animal('cobra', 'reptil');
$cavalo = new Animal('cavalo', 'quadrupede');
$pica_pau = new Animal('Pica Pau', 'ave');
$galinha = new Animal('Galinha', 'ave');
$Girafa = new Animal('Girafa', 'mamifero');
$sapo = new Animal('Sapo', 'anfibio');
$caramujo = new Animal('caramujo', 'molusco');
$macaco = new Animal('macaco', 'mamifero');
$borboleta = new Animal('borboleta', 'artropode');
$lagarto = new Animal('lagarto', 'reptil');


$listaDeAnimais = [$lagartixa,
    $cobra,
    $cavalo,
    $pica_pau,
    $galinha,
    $Girafa,
    $sapo,
    $caramujo,
    $macaco,
    $borboleta,
    $lagarto
];

$ferramenta = new Ferramenta();
$especies = $ferramenta->classificaEspecie($listaDeAnimais);
$resultado = new Resultado('reptil', $listaDeAnimais);


