<?php
require_once "src/FakeDB.php";
class Produto
{
    private $id;
    private static $lastId = 1;
    private $nome;
    private $valor;
    private $custo;
    private $estoque;
    private $qtdVendidos; // em unidades
    private $totalVendidos; // em reais ( qtdVendidos * valor )

    public function __construct($nome, $valor, $custo, $estoque)
    {
        $this->id = Produto::$lastId++;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->custo = $custo;
        $this->estoque = $estoque;
        $this->qtdVendidos = 0;  
        $this->totalVendidos = 0;  
    }

    public function vender($qtd)
    {
        //define o atributo qtdVendidos para facilitar contas
        $this->qtdVendidos = $qtd;
        
        //faz o teste para ver se a quantidade desejado do produto ultrapassa o estoque
        if (($this->estoque - $this->qtdVendidos) >= 0) 
        {
            //desconta do estoque a quantidade de produtos comprados
            $this->estoque -= $this->qtdVendidos;
            
            //calcula o valor total da quantidade vendida
            $this->totalVendidos = $this->qtdVendidos * $this->valor;
        }
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of custo
     */ 
    public function getCusto()
    {
        return $this->custo;
    }

    /**
     * Set the value of custo
     *
     * @return  self
     */ 
    public function setCusto($custo)
    {
        $this->custo = $custo;

        return $this;
    }

    /**
     * Get the value of estoque
     */ 
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * Set the value of estoque
     *
     * @return  self
     */ 
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;

        return $this;
    }

    /**
     * Get the value of qtdVendidos
     */ 
    public function getQtdVendidos()
    {
        return $this->qtdVendidos;
    }

    /**
     * Set the value of qtdVendidos
     *
     * @return  self
     */ 
    public function setQtdVendidos($qtdVendidos)
    {
        $this->qtdVendidos = $qtdVendidos;

        return $this;
    }

    /**
     * Get the value of totalVendidos
     */ 
    public function getTotalVendidos()
    {
        return $this->totalVendidos;
    }

    /**
     * Set the value of totalVendidos
     *
     * @return  self
     */ 
    public function setTotalVendidos($totalVendidos)
    {
        $this->totalVendidos = $totalVendidos;

        return $this;
    }
}