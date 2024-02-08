<?php
class Pessoa
{
    private $nome;
    private $idade;
    
    public function __construct($nome = "", $idade = "")
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo ("$this->nome foi removido(a).");
    }


    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function exibirDados(){
        echo "<h2>$this->nome tem $this->idade ano(s) </h2>";
    }
}

