<?php
include ("interfaceMateriais.php");

class Tutoriais implements InterfaceMateriais
{
    private $autor;
    private $descricao;
    private $titulo;

    public function __construct($autor, $titulo, $descricao)
    {
        $this->setAutor($autor);
        $this->setTitulo($titulo);
        $this->setDescricao($descricao);
    }

    private function setTitulo($parametro)
    {
        $this->titulo = $parametro;
    }
    private function setAutor($parametro){
        $this->autor = $parametro;
    }
    private function setDescricao($parametro){
        $this->descricao = $parametro;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function data(){
        return "Implementando data por meio da Interface";
    }
}