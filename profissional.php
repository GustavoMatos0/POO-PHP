<?php
require_once "pessoa.php";

class Profissional extends Pessoa {
    private $profissao;
    function __construct($nome = '', $idade =0, $profissao=""){
        parent::__construct($nome,$idade);
        $this->profissao = $profissao;
    }
    

    /**
     * Get the value of profissao
     */ 
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Set the value of profissao
     *
     * @return  self
     */ 
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;

        return $this;
    }

    public function exibirDados(){
        parent::exibirDados();
        echo "<h3>Trabalha como $this->profissao</h2>";
    }
}