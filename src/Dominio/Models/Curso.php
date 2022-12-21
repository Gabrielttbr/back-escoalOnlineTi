<?php

namespace Gabriel\BackEscolaOnlineTi\Dominio\Models;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
/**
 * @Entity
 */
class Curso
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int|null $id;
    /**
     * @Column (type="string", length=50)
     */
    private string $nome;
    private string $descricao;
    public function getId(): ?int
    {
        return $this->id;
    }


    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getLancamento(): \DateTime
    {
        return $this->lancamento;
    }

    public function setLancamento(\DateTime $lancamento): self
    {
        $this->lancamento = $lancamento;
        return $this;
    }
    private \DateTime $lancamento;
}