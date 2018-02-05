<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProdutoRepository")
 */
class Produto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $nome;

    /**
     * @var float
     * @ORM\Column(type="decimal", scale= 2)
     */
    private $preco;

    // add your own fields

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
     *
     * @return  string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param  string  $nome
     *
     * @return  self
     */ 
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of preco
     *
     * @return  float
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @param  float  $preco
     *
     * @return  self
     */ 
    public function setPreco(float $preco)
    {
        $this->preco = $preco;

        return $this;
    }
}
