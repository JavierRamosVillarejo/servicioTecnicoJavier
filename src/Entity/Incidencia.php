<?php

namespace App\Entity;

use App\Repository\IncidenciaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IncidenciaRepository::class)
 */
class Incidencia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity=Cliente::class, inversedBy="incidencias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clientes;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, inversedBy="incidencia")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    /**
     * @ORM\OneToMany(targetEntity=LineasDeIncidencia::class, mappedBy="incidencias", orphanRemoval=true)
     */
    private $lineasdeIncidencias;

    public function __construct()
    {
        $this->lineasdeIncidencias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getClientes(): ?Cliente
    {
        return $this->clientes;
    }

    public function setClientes(?Cliente $clientes): self
    {
        $this->clientes = $clientes;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * @return Collection|LineasDeIncidencia[]
     */
    public function getLineasdeIncidencias(): Collection
    {
        return $this->lineasdeIncidencias;
    }

    public function addLineasdeIncidencia(LineasDeIncidencia $lineasdeIncidencia): self
    {
        if (!$this->lineasdeIncidencias->contains($lineasdeIncidencia)) {
            $this->lineasdeIncidencias[] = $lineasdeIncidencia;
            $lineasdeIncidencia->setIncidencias($this);
        }

        return $this;
    }

    public function removeLineasdeIncidencia(LineasDeIncidencia $lineasdeIncidencia): self
    {
        if ($this->lineasdeIncidencias->removeElement($lineasdeIncidencia)) {
            // set the owning side to null (unless already changed)
            if ($lineasdeIncidencia->getIncidencias() === $this) {
                $lineasdeIncidencia->setIncidencias(null);
            }
        }

        return $this;
    }
}
