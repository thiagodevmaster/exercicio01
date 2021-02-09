<?php


namespace Thiago\Animal\Service;


class Resultado extends Ferramenta
{
    private string $especie;
    private int $quantidade;

    /**
     * Resultado constructor.
     * @param string $especie
     * @param int $quantidade
     */
    public function __construct(string $especie, array $listaDeAnimais)
    {
        $this->especie = $especie;
        $this->quantidade = $this->retornaQuantidade($especie, $listaDeAnimais);
    }
    
    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    private function retornaQuantidade($especie, $array): int
    {
        $animais = $this->filtraEspecie($array, $especie);
        $qnt = count($animais);
        return $qnt;
    }
    
    


}