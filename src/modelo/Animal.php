<?php


namespace Thiago\Animal\Modelo;


class Animal
{
    private string $nome;
    private string $especie;

    /**
     * Animal constructor.
     * @param string $nome
     * @param string $especie
     */
    public function __construct(string $nome, string $especie)
    {
        $this->nome = $nome;
        $this->especie = $especie;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getEspecie(): string
    {
        return $this->especie;
    }




}