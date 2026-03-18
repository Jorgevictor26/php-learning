<?php 

namespace App\entities;

class Vaga
{
    public $id;
    public $titulo;
    public $descricao;
    public $ativo;
    public $data;


    public function __construct($titulo, $descricao, $ativo)
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->ativo = $ativo;
    }

    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');

        
    }
}

?>