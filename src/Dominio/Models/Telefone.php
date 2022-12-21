<?php

namespace Gabriel\BackEscolaOnlineTi\Dominio\Models;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\ManyToMany;

/**
 * @Entity
 */
class Telefone
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int|null $id;

    /**
     * @Column(type="string", length=20)
     */
    private string $numero;
    /**
     * @ManyToMany(targetEntity="Aluno")
     */
    private array $alunos;


    public function getAlunos(): array
    {
        return $this->alunos;
    }


    public function setAlunos(array $alunos): self
    {
        $this->alunos->add($alunos);
        return $this;
    }

    public function __construct(){
        $this->alunos = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }


    public function getNumero(): string
    {
        return $this->numero;
    }



    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

}