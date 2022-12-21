<?php

namespace Gabriel\BackEscolaOnlineTi\Dominio\Models;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
/**
 * @Entity
 */
class Endereco
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int|null $id;
    /**
     * @Column(type="string", length=50)
     */
    private string $cidade;
    /**
     * @Column(type="string",length=9)
     */
    private string $cep;
    /**
     * @Column(type="string", length=50)
     */
    private string $rua;
    /**
     * @Column(type="string", length=40)
     */
    private string $complemento;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getCidade(): string
    {
        return $this->cidade;
    }


    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;
        return $this;
    }


    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $cep): self
    {
        $this->cep = $cep;
        return $this;
    }

    public function getRua(): string
    {
        return $this->rua;
    }


    public function setRua(string $rua): self
    {
        $this->rua = $rua;
        return $this;
    }


    public function getComplemento(): string
    {
        return $this->complemento;
    }


    public function setComplemento(string $complemento): self
    {
        $this->complemento = $complemento;
        return $this;
    }

}