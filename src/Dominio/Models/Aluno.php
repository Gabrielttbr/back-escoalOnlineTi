<?php

namespace Gabriel\BackEscolaOnlineTi\Dominio\Models;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\OneToMany;
/**
 * @Entity
 */
class Aluno
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private int|null $id = null;
    /**
     * @Column(type="string", length=60)
     */
    private string $nome;
    /**
     * @Column(type="string", length=60)
     */
    private string $email;
    /**
     * @Column(type="string", length=14, unique=true)
     */

    private string $cpf;
    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="Aluno")
     */
    private array $telefones;

    /**
     * @return array
     */
    public function getTelefones(): Collection
    {
        return $this->telefones->toArray();
    }

    public function setTelefones(array $telefones): self
    {
        $this->telefones->add($telefones);
        return $this;
    }

    public function __construct()
    {
        $this->telefones = new ArrayCollection();
    }

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

    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;
        return $this;

    }
}