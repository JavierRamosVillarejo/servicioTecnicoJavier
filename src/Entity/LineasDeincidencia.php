<?php

namespace App\Entity;

use App\Repository\LineasDeincidenciaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LineasDeincidenciaRepository::class)
 */
class LineasDeincidencia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $texto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datetime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fecha_creacion;

    /**
     * @ORM\ManyToOne(targetEntity=Incidencia::class, inversedBy="lineasdeIncidencias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $incidencias;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexto(): ?string
    {
        return $this->texto;
    }

    public function setTexto(string $texto): self
    {
        $this->texto = $texto;

        return $this;
    }

    public function getDatetime(): ?string
    {
        return $this->datetime;
    }

    public function setDatetime(string $datetime): self
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getFecha(): ?string
    {
        return $this->fecha;
    }

    public function setFecha(string $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getFechaCreacion(): ?string
    {
        return $this->fecha_creacion;
    }

    public function setFechaCreacion(string $fecha_creacion): self
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    public function getIncidencias(): ?Incidencia
    {
        return $this->incidencias;
    }

    public function setIncidencias(?Incidencia $incidencias): self
    {
        $this->incidencias = $incidencias;

        return $this;
    }
}
