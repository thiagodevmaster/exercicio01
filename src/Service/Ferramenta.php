<?php


namespace Thiago\Animal\Service;


class Ferramenta
{
    public function filtraEspecie(array $animais, string $especie): array
    {
        $novoVetor = [];
        foreach ($animais as $animal){
            $e = $animal->getEspecie();
            if($e == $especie){
                $novoVetor[] = $animal->getNome();;
            }
        }
        return $novoVetor;
    }

    public function classificaEspecie(array $animais): array
    {
        $arrayDeSaida = [];
        foreach ($animais as $animal){
            $nomeEspecie = $animal->getEspecie();
            $temNaLista = in_array($nomeEspecie, $arrayDeSaida);
            if($temNaLista == false){
                $arrayDeSaida[] = $nomeEspecie;
            }
        }
        return $arrayDeSaida;
    }

    
}