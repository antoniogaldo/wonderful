<?php

namespace EntrateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * entrate
 *
 * @ORM\Table(name="entrate")
 * @ORM\Entity(repositoryClass="EntrateBundle\Repository\entrateRepository")
 */
class entrate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome_persone", type="string", length=255)
     */
    private $cognomePersone;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_persone", type="integer")
     */
    private $numeroPersone;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_entrata", type="integer")
     */
    private $numeroEntrata;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cognomePersone
     *
     * @param string $cognomePersone
     *
     * @return entrate
     */
    public function setCognomePersone($cognomePersone)
    {
        $this->cognomePersone = $cognomePersone;

        return $this;
    }

    /**
     * Get cognomePersone
     *
     * @return string
     */
    public function getCognomePersone()
    {
        return $this->cognomePersone;
    }

    /**
     * Set numeroPersone
     *
     * @param integer $numeroPersone
     *
     * @return entrate
     */
    public function setNumeroPersone($numeroPersone)
    {
        $this->numeroPersone = $numeroPersone;

        return $this;
    }

    /**
     * Get numeroPersone
     *
     * @return int
     */
    public function getNumeroPersone()
    {
        return $this->numeroPersone;
    }

    /**
     * Set numeroEntrata
     *
     * @param integer $numeroEntrata
     *
     * @return entrate
     */
    public function setNumeroEntrata($numeroEntrata)
    {
        $this->numeroEntrata = $numeroEntrata;

        return $this;
    }

    /**
     * Get numeroEntrata
     *
     * @return int
     */
    public function getNumeroEntrata()
    {
        return $this->numeroEntrata;
    }
}

