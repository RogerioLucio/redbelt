<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidente
 *
 * @ORM\Table(name="incidente")
 * @ORM\Entity
 */
class Incidente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descricao", type="string", length=255, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="criticidade", type="string", length=55, nullable=false)
     */
    private $criticidade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=60, nullable=true)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=true)
     */
    private $status;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    /**
     * @param null|string $titulo
     */
    public function setTitulo(?string $titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    /**
     * @param null|string $descricao
     */
    public function setDescricao(?string $descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return string
     */
    public function getCriticidade(): string
    {
        return $this->criticidade;
    }

    /**
     * @param string $criticidade
     */
    public function setCriticidade(string $criticidade)
    {
        $this->criticidade = $criticidade;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    /**
     * @param null|string $tipo
     */
    public function setTipo(?string $tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     */
    public function setStatus(?string $status)
    {
        $this->status = $status;
        return $this;
    }



}
