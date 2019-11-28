<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echelon
 *
 * @ORM\Table(name="echelon")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\EchelonRepository")
 */
class Echelon
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
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true)
     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


}
